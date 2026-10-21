<?php
/**
 * PHP Database Exporter for ApexNova
 */
require_once __DIR__ . '/wp-load.php';

global $wpdb;

$backup_dir = WP_CONTENT_DIR . '/backups';
if (!file_exists($backup_dir)) {
    wp_mkdir_p($backup_dir);
}

$filename = $backup_dir . '/apexnova_phase6_backup_' . date('Ymd_His') . '.sql';
$handle = fopen($filename, 'w');

if (!$handle) {
    die("Failed to create backup file.\n");
}

fwrite($handle, "-- ==============================================================================\n");
fwrite($handle, "-- ApexNova Holding Company — Database Backup\n");
fwrite($handle, "-- Export Date: " . date('Y-m-d H:i:s') . "\n");
fwrite($handle, "-- WordPress Version: " . get_bloginfo('version') . "\n");
fwrite($handle, "-- ==============================================================================\n\n");
fwrite($handle, "SET NAMES utf8mb4;\n");
fwrite($handle, "SET FOREIGN_KEY_CHECKS = 0;\n\n");

$tables = $wpdb->get_col("SHOW TABLES");

foreach ($tables as $table) {
    fwrite($handle, "-- -----------------------------------------------------\n");
    fwrite($handle, "-- Table structure for `{$table}`\n");
    fwrite($handle, "-- -----------------------------------------------------\n");
    fwrite($handle, "DROP TABLE IF EXISTS `{$table}`;\n");

    $create_row = $wpdb->get_row("SHOW CREATE TABLE `{$table}`", ARRAY_N);
    fwrite($handle, $create_row[1] . ";\n\n");

    $rows = $wpdb->get_results("SELECT * FROM `{$table}`", ARRAY_A);
    if (!empty($rows)) {
        fwrite($handle, "-- Data for table `{$table}` (" . count($rows) . " rows)\n");
        foreach ($rows as $row) {
            $cols = array_map(function($c) { return "`" . str_replace("`", "``", $c) . "`"; }, array_keys($row));
            $vals = array_map(function($v) use ($wpdb) {
                if (is_null($v)) return "NULL";
                return "'" . $wpdb->_escape($v) . "'";
            }, array_values($row));
            fwrite($handle, "INSERT INTO `{$table}` (" . implode(", ", $cols) . ") VALUES (" . implode(", ", $vals) . ");\n");
        }
        fwrite($handle, "\n");
    }
}

fwrite($handle, "SET FOREIGN_KEY_CHECKS = 1;\n");
fwrite($handle, "-- Backup completed successfully.\n");
fclose($handle);

$filesize = filesize($filename);
echo "SUCCESS: Database backup created at:\n{$filename}\nSize: " . round($filesize / 1024, 2) . " KB\n";

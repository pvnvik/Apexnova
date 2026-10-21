<?php
/**
 * ApexNova Comprehensive Services Data
 * Reconstructed from 69-page Technical Source PDF
 */

if (!defined('ABSPATH')) {
    exit;
}

function apexnova_get_services_data() {
    return array(
        // 1. Aviation Fuel Systems
        'aviation-fuel-systems' => array(
            'title' => 'Aviation Fuel Hydrant Systems',
            'category' => 'Aviation & Fuel Systems',
            'hero_img' => 'page_03_img_01.webp',
            'tagline' => 'Turnkey Fuel Pipeline Design, Apron Hydrant Pits & High-Integrity Couplers',
            'intro' => 'ApexNova Holding Company deploys a highly experienced engineering team specializing in the turnkey design, execution, and installation of aviation fuel pipeline and hydrant dispensing networks across civil and military airfields in Saudi Arabia.',
            'sections' => array(
                array(
                    'title' => 'Hydrant Pit Alignment & Apron Engineering',
                    'text' => 'The installation of fuel lines requires precise civil and mechanical coordination. Hydrant pits are meticulously placed and aligned with apron grade levels. This involves rigorous multi-stage verification including soil compaction testing, laser level verification, and strict elevation control prior to pipe lowering.',
                    'image' => 'page_06_img_01.webp',
                    'bullets' => array(
                        'Compaction testing and geotechnical validation',
                        'Laser elevation alignment with airport apron finished grade',
                        'Internal inspection approvals before pipe lowering',
                        'Specialized valve and pit coupler assemblies'
                    )
                ),
                array(
                    'title' => 'Fuel Cleanliness & Flushing Infrastructure',
                    'text' => 'Maintaining high fuel cleanliness within the hydrant system is vital to flight safety. Our pipeline designs incorporate engineered high points and low points to facilitate rapid, effective hydraulic flushing and particulate cleaning, preventing sedimentation and ensuring uninterrupted operation.',
                    'image' => 'page_07_img_01.webp',
                    'bullets' => array(
                        'High-point air release valves and manual vent stations',
                        'Low-point drainage and water evacuation pots',
                        'Flushing velocities calculated to API 1581 / 1584 recommendations',
                        '100% radiographic and pressure integrity testing'
                    )
                ),
                array(
                    'title' => 'Valve Assembly & Pit Maintenance Couplers',
                    'text' => 'Special attention is given to the selection and installation of hydrant pit isolation valves, dual-port couplers, and pressure surge relief mechanisms. Each connection point undergoes hydrostatic testing and strict seal inspection to eliminate any hazard during aircraft turnarounds.',
                    'image' => 'page_07_img_02.webp',
                    'bullets' => array(
                        'Heavy-duty cast steel and stainless valve arrangements',
                        'Dual lanyard emergency isolation couplings',
                        'Surface pit covers engineered for aircraft wheel loadings',
                        'Routine servicing protocols without line drainage'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_07_img_01.webp', 'caption' => 'Technicians aligning hydrant pit coupler'),
                array('img' => 'page_07_img_02.webp', 'caption' => 'Hydrant pit cover and seal installation'),
                array('img' => 'page_07_img_03.webp', 'caption' => 'High-point flange assembly and vent line'),
                array('img' => 'page_07_img_05.webp', 'caption' => 'Dual coupler pressure verification test')
            ),
            'standards' => array('Saudi Aramco Specs', 'API 1581', 'API 1584', 'NFPA 407', 'EI 1540', 'GACA Regulations'),
            'related' => array('pipeline-coating', 'cathodic-protection', 'jet-a1-testing-commissioning')
        ),

        // 2. Pipeline Coating
        'pipeline-coating' => array(
            'title' => 'Pipeline Coating & Corrosion Protection',
            'category' => 'Aviation & Fuel Systems',
            'hero_img' => 'page_04_img_01.webp',
            'tagline' => '3LPE External Systems, High-Build Epoxy Linings & Holiday Testing',
            'intro' => 'Our coating capabilities encompass state-of-the-art internal and external protection systems designed to withstand aggressive Saudi soil conditions and high-temperature environments in strict compliance with Saudi Aramco and international standards.',
            'sections' => array(
                array(
                    'title' => 'Internal Fuel Linings (850 / 950 Microns)',
                    'text' => 'We apply internal high-build liquid epoxy and solvent-free coatings (850 to 950 microns dry film thickness) engineered specifically for Jet A-1 and hydrocarbon pipelines. This ultra-smooth lining prevents internal corrosion, minimizes hydraulic friction, and ensures fuel clarity is maintained from storage to apron.',
                    'image' => 'page_04_img_03.webp',
                    'bullets' => array(
                        '850/950 micron high-build epoxy application',
                        'Zero fuel contamination or pigment leaching',
                        'Low surface roughness reducing pumping power',
                        'Resistance to microbial induced corrosion (MIC)'
                    )
                ),
                array(
                    'title' => 'External 3LPE & Fusion Bonded Epoxy (FBE)',
                    'text' => 'For buried pipelines, ApexNova applies Three-Layer Polyethylene (3LPE) coating systems. We utilize high-performance materials including EX4413-L300(S), an epoxy resin-based thermosetting powder primer, followed by a copolymer adhesive and high-density polyethylene outer jacket.',
                    'image' => 'page_04_img_02.webp',
                    'bullets' => array(
                        'EX4413-L300(S) thermosetting epoxy powder primer',
                        'Grafted copolymer intermediate bonding adhesive',
                        'High-density polyethylene outer armor protection',
                        'Superior cathodic disbondment resistance'
                    )
                ),
                array(
                    'title' => 'Quality Verification & Holiday Testing',
                    'text' => 'All pipe coating applications are inspected in accordance with Aramco and NACE/AMPP standards. Every square meter of pipe body and field joint undergoes high-voltage Holiday testing to detect microscopic pinholes or voids prior to trench backfilling.',
                    'image' => 'page_04_img_04.webp',
                    'bullets' => array(
                        '100% High-voltage Holiday porosity testing',
                        'Adhesion peel testing to ISO 21809 standards',
                        'Dry Film Thickness (DFT) magnetic gauge profiling',
                        'Comprehensive QA/QC dossier and inspection release'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_04_img_01.webp', 'caption' => '3LPE coated steel pipes in factory staging'),
                array('img' => 'page_04_img_02.webp', 'caption' => 'Beveled coated pipe spools stacked for transport'),
                array('img' => 'page_04_img_03.webp', 'caption' => 'Internal epoxy lining inspection'),
                array('img' => 'page_04_img_04.webp', 'caption' => 'Bevel protection and internal lining finish')
            ),
            'standards' => array('Saudi Aramco 09-SAMSS-089', 'ISO 21809-1', 'NACE SP0169', 'DIN 30670', 'ASTM G14'),
            'related' => array('aviation-fuel-systems', 'cathodic-protection', 'hot-tapping-cold-cutting')
        ),

        // 3. Cathodic Protection
        'cathodic-protection' => array(
            'title' => 'Cathodic Protection (CP) Systems',
            'category' => 'Aviation & Fuel Systems',
            'hero_img' => 'page_09_img_01.webp',
            'tagline' => 'Deep-Well Impressed Current & Sacrificial Anode Groundbeds',
            'intro' => 'Cathodic Protection is an essential electro-chemical method used to prevent corrosion on buried pipelines, storage tanks, and underwater infrastructure. ApexNova specializes in designing, drilling, installing, and commissioning both sacrificial and impressed-current deep-well CP systems.',
            'sections' => array(
                array(
                    'title' => 'Deep-Well Cathodic Protection Drilling',
                    'text' => 'A deep-well CP system is an impressed-current arrangement where mixed metal oxide (MMO) or high-silicon cast iron anodes are installed vertically deep underground (50m to 150m+), inside a drilled borehole connected to a DC rectifier. This setup provides exceptionally uniform current distribution over long pipeline corridors.',
                    'image' => 'page_09_img_02.webp',
                    'bullets' => array(
                        'Vertical borehole drilling with specialized truck rigs',
                        'Deep placement reaching low-resistivity geological strata',
                        'Ideal for congested airport and industrial plant plots',
                        'Minimal interference with third-party underground utilities'
                    )
                ),
                array(
                    'title' => 'Rectifiers & Calcined Petroleum Coke Backfill',
                    'text' => 'The deep borehole is packed with conductive calcined petroleum coke breeze backfill, ensuring intimate contact between the anodes and the earth. An oil-cooled or air-cooled DC rectifier unit supplies continuous protective current, forcing the pipeline steel to remain cathodic and prevent electron loss.',
                    'image' => 'page_08_img_01.webp',
                    'bullets' => array(
                        'Continuous impressed DC current forced to pipe cathode',
                        'Extended anode service life exceeding 25 to 30 years',
                        'Automated potential monitoring test stations',
                        'Substantial operational savings over traditional shallow beds'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_09_img_01.webp', 'caption' => 'Deep well borehole drilling rig on site'),
                array('img' => 'page_09_img_02.webp', 'caption' => 'Vertical borehole drilling for MMO anode bed'),
                array('img' => 'page_08_img_01.webp', 'caption' => 'Impressed current CP system schematic')
            ),
            'standards' => array('NACE SP0169', 'NACE SP0572', 'Saudi Aramco SAES-X-400', 'ISO 15589-1', 'IEEE 80'),
            'related' => array('aviation-fuel-systems', 'pipeline-coating', 'horizontal-directional-drilling')
        ),

        // 4. EFSO Systems
        'efso-system' => array(
            'title' => 'Emergency Fuel Shut-Off (EFSO) Systems',
            'category' => 'Aviation & Fuel Systems',
            'hero_img' => 'page_10_img_02.webp',
            'tagline' => 'Redundant RIO Panels, Motor Operated Valves (MOVs) & PLC Integration',
            'intro' => 'ApexNova engineers, installs, and commissions Emergency Fuel Shut-Off (EFSO) systems for aviation hydrant networks and fuel loading terminals. Our systems ensure immediate isolation of pressurized fuel headers during emergencies, preventing catastrophic spills and fire hazards.',
            'sections' => array(
                array(
                    'title' => 'Dual Redundant RIO & PLC Integration',
                    'text' => 'Our scope encompasses the integration of two redundant Remote Input/Output (RIO) panels with the central airfield Programmable Logic Controller (PLC) architecture. This redundancy guarantees that an emergency trip command executes instantaneously, even in the event of an individual panel or network failure.',
                    'image' => 'page_10_img_02.webp',
                    'bullets' => array(
                        'Two fully redundant RIO control panels',
                        'Fault-tolerant fiber optic ring network communication',
                        'SIL-2 and SIL-3 safety instrumented functions',
                        'Real-time valve position feedback and health diagnostics'
                    )
                ),
                array(
                    'title' => 'High-Speed Motor Operated Valves (MOVs)',
                    'text' => 'We integrate explosion-proof electric and electro-hydraulic Motor Operated Valves (MOVs) strategically located across airfield aprons. Activated via manual pushbuttons or automated ESD trips, these valves isolate pipeline segments within seconds while dampening hydraulic shock waves.',
                    'image' => 'page_11_img_01.webp',
                    'bullets' => array(
                        'ATEX and IECEx certified explosion-proof MOV actuators',
                        'Rapid fail-close emergency closure mechanisms',
                        'Integration with airfield break-glass emergency stations',
                        'Surge anticipation protection to prevent pipeline hammer'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_10_img_02.webp', 'caption' => 'EFSO bollard and push-button installation'),
                array('img' => 'page_11_img_01.webp', 'caption' => 'Dual redundant RIO panel wiring interior'),
                array('img' => 'page_11_img_02.webp', 'caption' => 'PLC terminal integration and signal testing')
            ),
            'standards' => array('IEC 61508 (SIL 2/3)', 'NFPA 407', 'API RP 540', 'Saudi Aramco SAES-J-601'),
            'related' => array('scada-automation', 'aviation-fuel-systems', 'fire-fighting-systems')
        ),

        // 5. SCADA Automation
        'scada-automation' => array(
            'title' => 'SCADA & Automation Control Systems',
            'category' => 'Aviation & Fuel Systems',
            'hero_img' => 'page_11_img_01.webp',
            'tagline' => 'Real-Time Monitoring of Tank Levels, Pressures, Flows & Automated ESD',
            'intro' => 'We integrate industrial SCADA (Supervisory Control and Data Acquisition) systems into aviation fuel networks, power substations, and utility facilities. Our solutions provide operations teams with complete real-time visibility, automated valve control, and early fault detection.',
            'sections' => array(
                array(
                    'title' => 'Real-Time Network Monitoring',
                    'text' => 'The SCADA architecture continuously tracks bulk fuel storage tank levels, pipeline pressures, temperature, and volumetric flow rates. High-resolution telemetry enables operators to manage dynamic pumping schedules, balance distribution headers, and immediately detect abnormal pressure anomalies.',
                    'image' => 'page_11_img_02.webp',
                    'bullets' => array(
                        'Continuous radar tank gauging and pressure logging',
                        'Automated start/stop sequencing of distribution pumps',
                        'Integrated mass-flow metering and inventory custody transfer',
                        'Historical trending and predictive maintenance alerts'
                    )
                ),
                array(
                    'title' => 'Valve Chamber Construction & Automation',
                    'text' => 'ApexNova designs and constructs precast underground valve chambers engineered to house motorized valves, bypass headers, and instrumentation. These engineered enclosures provide safe surface-level maintenance access without requiring personnel to enter hazardous confined spaces.',
                    'image' => 'page_11_img_03.webp',
                    'bullets' => array(
                        'Reinforced concrete precast waterproof valve chambers',
                        'Eliminates need for high-risk confined space entries',
                        'Explosion-proof sump pumps and hydrocarbon gas detection',
                        'Dramatically reduces ongoing maintenance and lifecycle costs'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_11_img_01.webp', 'caption' => 'SCADA control and marshalling cabinet'),
                array('img' => 'page_11_img_02.webp', 'caption' => 'PLC rack wiring and communications bus'),
                array('img' => 'page_11_img_03.webp', 'caption' => 'Underground valve chamber manifold piping'),
                array('img' => 'page_11_img_04.webp', 'caption' => 'Engineered chamber valve arrangement inspection')
            ),
            'standards' => array('ISA-88 / ISA-95', 'IEC 61131', 'IEC 62443 (Cybersecurity)', 'Aramco SAES-J-004'),
            'related' => array('efso-system', 'leak-detection', 'electrical-services')
        ),

        // 6. Leak Detection
        'leak-detection' => array(
            'title' => 'Pipeline Leak Detection & Integrity Surveys',
            'category' => 'Aviation & Fuel Systems',
            'hero_img' => 'page_12_img_01.webp',
            'tagline' => 'Acoustic Monitoring, Fiber-Optic Sensing & Electrical Resistivity',
            'intro' => 'Buried fuel lines require non-destructive and continuous monitoring to guarantee integrity. ApexNova provides advanced leak detection services combining acoustic monitoring, distributed fiber-optic sensing, electromagnetic testing, and geophysical electrical resistivity surveys.',
            'sections' => array(
                array(
                    'title' => 'Multi-Technology Detection Suite',
                    'text' => 'We deploy acoustic emission sensors and distributed temperature/strain fiber-optic cables along the pipeline route. These sensitive sensors pick up the microscopic frequency signatures of escaping fluids or localized ground temperature drops, identifying leak locations with pinpoint precision.',
                    'image' => 'page_12_img_01.webp',
                    'bullets' => array(
                        'Acoustic resonance listening arrays for pressurized lines',
                        'Distributed Acoustic & Temperature Fiber Optic Sensing (DAS/DTS)',
                        'Electromagnetic pipeline current mapping (PCM)',
                        'Geophysical electrical resistivity surveys for ground contamination'
                    )
                ),
                array(
                    'title' => 'Asset Integrity & Environmental Compliance',
                    'text' => 'Early detection prevents environmental contamination, preserves potable groundwater aquifers, and prevents expensive uncontained remediation. Our reports provide comprehensive integrity health profiles for asset owners, insurance underwriters, and regulatory authorities.',
                    'image' => 'page_14_img_02.webp',
                    'bullets' => array(
                        'Mitigation of environmental spill liabilities',
                        'Pinpoint excavation reducing pavement breaking costs',
                        'Detailed metallurgical and ultrasonic wall thickness logs',
                        'Compliance with Saudi Ministry of Environment regulations'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_12_img_01.webp', 'caption' => 'Pipeline integrity testing manifold array'),
                array('img' => 'page_14_img_02.webp', 'caption' => 'Field spool inspection during integrity audit')
            ),
            'standards' => array('API 1130', 'API 1175', 'EPA 40 CFR Part 280', 'Saudi Aramco SAES-B-054'),
            'related' => array('aviation-fuel-systems', 'scada-automation', 'pipeline-coating')
        ),

        // 7. Jet A-1 Testing & Commissioning
        'jet-a1-testing-commissioning' => array(
            'title' => 'Jet A-1 Fuel Line Testing & Commissioning',
            'category' => 'Aviation & Fuel Systems',
            'hero_img' => 'page_13_img_01.webp',
            'tagline' => 'Flushing, Drying, Circulation, Sampling Manifolds & Acceptance Release',
            'intro' => 'Aviation fuel pipelines must meet the strictest cleanliness and quality specifications prior to commercial handover. ApexNova executes the complete Jet A-1 commissioning cycle—from high-velocity flushing and desiccant drying to fuel circulation, sampling, and certified laboratory analysis.',
            'sections' => array(
                array(
                    'title' => 'Engineered Fuel Testing Manifolds',
                    'text' => 'A custom fuel testing manifold is fabricated and installed to provide a safe, closed-loop sampling and testing point. The manifold incorporates calibrated pressure gauges, micron sampling valves, temperature sensors, and isolation bypass lines to take representative fuel samples without introducing external contamination.',
                    'image' => 'page_12_img_02.webp',
                    'bullets' => array(
                        'Skid-mounted testing manifolds with multi-stage isolation',
                        'Micron sampling connections to avoid atmospheric exposure',
                        'Calibrated differential pressure gauges and flowmeters',
                        'Closed-loop drain lines preventing apron fuel spillages'
                    )
                ),
                array(
                    'title' => 'Four-Stage Commissioning Protocol',
                    'text' => 'The pipeline is systematically flushed to purge construction debris, then hot-air dried until dew point criteria confirm zero residual moisture. Approved Jet A-1 fuel is introduced and circulated under operational pressures, followed by representative sampling across all high-point and low-point stations.',
                    'image' => 'page_13_img_02.webp',
                    'bullets' => array(
                        'Stage 1: High-velocity flushing and debris removal',
                        'Stage 2: Complete air drying to certified negative dew point',
                        'Stage 3: Controlled fuel introduction and circulation',
                        'Stage 4: Representative sampling and visual clarity verification'
                    )
                ),
                array(
                    'title' => 'Visual Clarity & Filtration Acceptance',
                    'text' => 'Samples are visually inspected for "Clear & Bright" clarity, water droplets, and sediment. Strainers and filter water separators are inspected for particulate loading. Once all laboratory and field parameters meet ASTM D1655 and Aramco specifications, the line is formally released for airport fueling.',
                    'image' => 'page_13_img_03.webp',
                    'bullets' => array(
                        'Membrane filtration color testing to ASTM D2276',
                        'Free water detection using chemical water detector capsules',
                        'Inspection and clean sign-off of all inline strainers',
                        'Formal handover dossier for Civil Aviation authorities'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_13_img_01.webp', 'caption' => 'Engineers taking visual fuel clarity sample in glass jar'),
                array('img' => 'page_13_img_02.webp', 'caption' => 'Machined high-point and low-point test discs'),
                array('img' => 'page_13_img_03.webp', 'caption' => 'Engineering review of Jet A-1 test manifold'),
                array('img' => 'page_13_img_04.webp', 'caption' => 'Apron commissioning technical team'),
                array('img' => 'page_14_img_01.webp', 'caption' => 'Client inspectors reviewing Jet A-1 dispenser output')
            ),
            'standards' => array('ASTM D1655', 'EI 1540 / EI 1541', 'API 1581', 'JIG Standards', 'Saudi Aramco SAES-S-020'),
            'related' => array('aviation-fuel-systems', 'fuel-bowsers-tankers', 'scada-automation')
        ),

        // 8. Fuel Bowsers and Tankers
        'fuel-bowsers-tankers' => array(
            'title' => 'Aviation Fuel Bowsers & Tankers Manufacturing',
            'category' => 'Aviation & Fuel Systems',
            'hero_img' => 'page_17_img_01.webp',
            'tagline' => 'In-House Fabrication of Mobile Aviation Refuelers & Diesel Bowsers',
            'intro' => 'ApexNova Holding Company operates its own specialized manufacturing unit dedicated to the fabrication and assembly of aviation fuel bowsers, airport hydrant dispensers, and heavy diesel fuel-handling equipment built to stringent Saudi transportation and ASME standards.',
            'sections' => array(
                array(
                    'title' => 'Custom Tank Design & Compartment Layout',
                    'text' => 'Our bowsers feature tanks fabricated from high-grade aluminum alloy or stainless steel, configured with single or multiple baffles and compartments to optimize fluid stability during transit. Capacities are engineered to client requirements, ranging from 5,000L tactical bowsers to 60,000L heavy airfield tankers.',
                    'image' => 'page_18_img_01.webp',
                    'bullets' => array(
                        'High-tensile aluminum alloy 5083 or 316L stainless steel',
                        'Single or multi-compartment internal baffle configurations',
                        'Low center-of-gravity chassis mounting for airfield safety',
                        'Full compliance with SASO and Saudi Ministry of Transport rules'
                    )
                ),
                array(
                    'title' => 'Integrated Dispensing & Metering Cabinets',
                    'text' => 'Every refueler includes an ergonomic dispensing module complete with positive displacement pumps, electronic register flowmeters, filter water separators (EI 1581), hose reels, deadman controls, and bottom-loading vapor recovery systems.',
                    'image' => 'page_18_img_02.webp',
                    'bullets' => array(
                        'Certified filter water separator meeting EI 1581 6th Edition',
                        'Calibrated weights & measures custody transfer meters',
                        'Pneumatic deadman system with automatic shutoff',
                        'Complete bonding reels and static grounding systems'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_17_img_01.webp', 'caption' => 'Branded ApexNova Jet A-1 Fuel Bowser Truck'),
                array('img' => 'page_18_img_01.webp', 'caption' => 'ApexNova heavy-duty airfield refueler in operation'),
                array('img' => 'page_18_img_02.webp', 'caption' => 'Rear dispensing metering and filter cabinet'),
                array('img' => 'page_18_img_03.webp', 'caption' => 'Heavy tractor-trailer aviation refueler'),
                array('img' => 'page_18_img_05.webp', 'caption' => 'Airfield low-profile hydrant servicing unit')
            ),
            'standards' => array('ASME Section VIII', 'API 570 / 653', 'ADR Regulations', 'EI 1581', 'SASO Transport Codes'),
            'related' => array('jet-a1-testing-commissioning', 'aviation-fuel-systems', 'mechanical-industrial-solutions')
        ),

        // 9. Mechanical Industrial Solutions
        'mechanical-industrial-solutions' => array(
            'title' => 'Mechanical Industrial Solutions with Technology',
            'category' => 'Mechanical & Industrial',
            'hero_img' => 'page_19_img_01.webp',
            'tagline' => 'Turnkey Engineering, Static & Rotating Equipment, Piping & Vessels',
            'intro' => 'We specialize in the design, execution, installation, operation, and maintenance of advanced mechanical systems across the oil & gas, petrochemical, and heavy manufacturing sectors across Saudi Arabia.',
            'sections' => array(
                array(
                    'title' => 'Static & Rotating Equipment Installation',
                    'text' => 'ApexNova provides precision rigging, alignment, and installation of critical static and rotating machinery including multi-stage centrifugal pumps, industrial compressors, steam turbines, heat exchangers, and ASME Section VIII pressure vessels.',
                    'image' => 'page_19_img_02.webp',
                    'bullets' => array(
                        'Laser alignment and vibration analysis of rotating equipment',
                        'Rigging and heavy lifting of large vessels up to 200+ tons',
                        'Baseplate grouting with non-shrink epoxy grouts',
                        'Turnaround maintenance and seal overhaul'
                    )
                ),
                array(
                    'title' => 'Piping Fabrication & Structural Steel',
                    'text' => 'We fabricate and erect complex on-plot process piping and off-plot cross-country utility lines in carbon steel, stainless steel, and duplex alloys. Our structural steel fabrication division delivers pre-engineered pipe racks, equipment support towers, and industrial framing.',
                    'image' => 'page_20_img_01.webp',
                    'bullets' => array(
                        'ASME B31.3 and B31.4 compliant spool fabrication',
                        'Structural pipe racks, access platforms, and walkways',
                        'Bulk storage tanks designed to API 650 / API 620',
                        '100% NDT inspection: RT, UT, MPI, and Hydrotesting'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_19_img_01.webp', 'caption' => 'Structural steel industrial warehouse framing'),
                array('img' => 'page_19_img_02.webp', 'caption' => 'Large industrial shell and tube heat exchanger'),
                array('img' => 'page_20_img_01.webp', 'caption' => 'Heavy pressure vessel transport on multi-axle trailer'),
                array('img' => 'page_20_img_02.webp', 'caption' => 'Bulk industrial storage tanks farm')
            ),
            'standards' => array('ASME Section VIII', 'ASME B31.3 / B31.4', 'API 650', 'API 570 / 653', 'AWS D1.1'),
            'related' => array('hot-tapping-cold-cutting', 'civil-structural-works', 'fire-fighting-systems')
        ),

        // 10. Hot Tapping, Cold Cutting & Pipe Freezing
        'hot-tapping-cold-cutting' => array(
            'title' => 'Hot Tapping, Cold Cutting & Pipe Freezing',
            'category' => 'Mechanical & Industrial',
            'hero_img' => 'page_31_img_01.webp',
            'tagline' => 'Zero-Shutdown Tie-Ins, Precision Machining & Cryogenic Line Isolation',
            'intro' => 'Shutdowns cost industrial facilities millions in lost production. ApexNova’s specialized engineering teams perform under-pressure hot tapping, spark-free cold cutting, and cryogenic pipe freezing, allowing modifications and repairs without interrupting plant operations.',
            'sections' => array(
                array(
                    'title' => 'Hot Tapping (Live Tapping)',
                    'text' => 'Hot tapping is the precision method of connecting a new branch line to an active, pressurized pipeline without releasing product or stopping flow. Our certified crews carefully analyze operating pressure, product metallurgy, wall thickness, and flow rates to ensure 100% safety during cutting.',
                    'image' => 'page_31_img_02.webp',
                    'bullets' => array(
                        'Branch tie-ins performed under full operating pressure',
                        'Pilot drill retains the metal coupon, preventing pipe debris',
                        'Eliminates plant downtime, flaring, and expensive restart cycles',
                        'Execution on lines transporting gas, crude, water, and steam'
                    )
                ),
                array(
                    'title' => 'Cold Cutting & Beveling',
                    'text' => 'Cold cutting refers to mechanical machining where steel pipe is sliced into its final shape without heat, plasma, or torches. By avoiding open flames, cold cutting eliminates heat-affected zones (HAZ) and is completely safe in hazardous explosive (Zone 1/2) hydrocarbon areas.',
                    'image' => 'page_33_img_01.webp',
                    'bullets' => array(
                        'Split-frame clamshell machines for precision cutting',
                        'Simultaneous cutting and compound weld beveling',
                        'Zero spark generation: safe for combustible environments',
                        'Flawless surface finish ready for immediate fit-up and welding'
                    )
                ),
                array(
                    'title' => 'Cryogenic Pipe Freezing Technology',
                    'text' => 'ApexNova utilizes specialized liquid nitrogen jackets to create temporary, ultra-solid freeze plugs inside active piping. This isolates a pipe section so technicians can replace valves or repair leaks without draining the entire network.',
                    'image' => 'page_33_img_04.webp',
                    'bullets' => array(
                        'Cryogenic freeze plugs rated up to 250+ bar pressure',
                        'No draining, refilling, or chemical water treatment wasted',
                        'Continuous temperature logging throughout the intervention',
                        'Rapid thaw and instant return to normal operation'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_31_img_01.webp', 'caption' => 'Hot tapping machine mounted on high-pressure main'),
                array('img' => 'page_31_img_02.webp', 'caption' => 'Field scaffolding enclosure for refinery hot tap'),
                array('img' => 'page_33_img_01.webp', 'caption' => 'Split-frame cold cutting machine mounted on steel pipe'),
                array('img' => 'page_33_img_02.webp', 'caption' => 'Trench cold cutting and pipe beveling'),
                array('img' => 'page_33_img_04.webp', 'caption' => 'Cryogenic freezing jacket showing liquid nitrogen frost')
            ),
            'standards' => array('API RP 2201', 'ASME B31.3', 'OSHA 1910.147', 'Saudi Aramco SAES-L-310'),
            'related' => array('mechanical-industrial-solutions', 'pipeline-coating', 'aviation-fuel-systems')
        ),

        // 11. Fire Fighting Systems
        'fire-fighting-systems' => array(
            'title' => 'Fire Fighting & Alarm Detection Systems (FADS)',
            'category' => 'Building Services (MEP)',
            'hero_img' => 'page_21_img_01.webp',
            'tagline' => 'Integrated Life Safety, Detection Panels, Sprinklers & Wet Risers',
            'intro' => 'A Fire Alarm and Detection System (FADS) is an integrated life-safety network designed to detect fires at the earliest stage, alert occupants, and initiate automatic suppression. ApexNova delivers certified fire protection solutions across commercial towers, industrial plants, and warehouses.',
            'sections' => array(
                array(
                    'title' => 'Intelligent Fire Detection & Panels',
                    'text' => 'We engineer conventional and addressable fire alarm panels integrated with multi-sensor detectors, optical smoke detectors, flame detectors, optical beam detectors, LPG/H2S gas leak sensors, and water leak detection cables across mission-critical facilities.',
                    'image' => 'page_22_img_01.webp',
                    'bullets' => array(
                        'Addressable intelligent fire alarm control panels (FACP)',
                        'Multi-criteria smoke, thermal, and flame detection',
                        'Hazardous area gas leak detection (H2S, LPG, Hydrocarbons)',
                        'Audio-visual sounders, strobe arrays, and voice evacuation'
                    )
                ),
                array(
                    'title' => 'Hydrant Pump & Booster Systems',
                    'text' => 'Fire hydrants are the backbone of site fire-fighting. We install UL-listed/FM-approved fire pump skids (electric, diesel, and jockey pumps), underground courtyard hydrant loops, and interior wet-riser landing valve systems ensuring high-pressure water delivery.',
                    'image' => 'page_23_img_03.webp',
                    'bullets' => array(
                        'UL-listed & FM-approved fire pump packages',
                        'Courtyard external hydrants and industrial water monitors',
                        'High-rise building wet riser landing valves and hose reels',
                        'Automatic pressure maintenance via dedicated jockey pumps'
                    )
                ),
                array(
                    'title' => 'Automatic Sprinkler Systems',
                    'text' => 'Fire sprinkler systems provide reliable, immediate automatic suppression with over 97% success in commercial buildings, hospitals, and logistics hubs. We supply wet pipe, dry pipe, pre-action, and deluge systems tailored to building occupancy risks.',
                    'image' => 'page_25_img_06.webp',
                    'bullets' => array(
                        'Wet pipe and pre-action sprinkler arrangements',
                        'High-density deluge systems for transformer bays & tank farms',
                        'Fast-response upright and pendent glass-bulb heads',
                        'Full compliance with NFPA 13 and Saudi Civil Defense'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_21_img_01.webp', 'caption' => 'Industrial fire pump room with red piping network'),
                array('img' => 'page_22_img_01.webp', 'caption' => 'Smoke, thermal and carbon monoxide detector suite'),
                array('img' => 'page_23_img_02.webp', 'caption' => 'Portable extinguishers (CO2, Dry Powder, Foam)'),
                array('img' => 'page_24_img_04.webp', 'caption' => 'Hydrant landing valves, monitors, and hose reels'),
                array('img' => 'page_25_img_06.webp', 'caption' => 'High-velocity sprinkler discharge test')
            ),
            'standards' => array('NFPA 10 / 13 / 14 / 20 / 72', 'Saudi Civil Defense Requirements', 'UL / FM Listed', 'SASO Standards'),
            'related' => array('plumbing-services', 'hvac-technical-services', 'electrical-services')
        ),

        // 12. Plumbing Services
        'plumbing-services' => array(
            'title' => 'Commercial & Industrial Plumbing Services',
            'category' => 'Building Services (MEP)',
            'hero_img' => 'page_26_img_01.webp',
            'tagline' => 'Turnkey Engineering, Potable Water, Drainage, Pumps & Maintenance',
            'intro' => 'ApexNova delivers high-performing plumbing contracting solutions supporting residential complexes, corporate towers, hospitals, hotels, and heavy industrial facilities across the Kingdom of Saudi Arabia.',
            'sections' => array(
                array(
                    'title' => 'Comprehensive MEP Plumbing Scope',
                    'text' => 'Our specialized division handles design, procurement from approved vendor lists, installation, testing, and commissioning. We engineer potable cold & hot water piping, greywater drainage, sanitary sewer networks, stormwater collection, booster pump skids, and bulk water storage tanks.',
                    'image' => 'page_27_img_01.webp',
                    'bullets' => array(
                        'PPR, copper, and HDPE potable water distribution',
                        'Acoustic cast iron and uPVC drainage and sewerage',
                        'Variable Frequency Drive (VFD) booster pump stations',
                        'Sanitary ware fixture supply and certified installation'
                    )
                ),
                array(
                    'title' => 'Annual & Term Maintenance Contracts',
                    'text' => 'We undertake annual and multi-year term maintenance contracts to ensure uninterrupted facility operations. Our certified plumbers provide preventative leak inspections, pump overhauls, valve servicing, backflow preventer testing, and 24/7 emergency response.',
                    'image' => 'page_28_img_01.webp',
                    'bullets' => array(
                        'Cost-efficient systems designed to minimize water loss',
                        'Adherence to Saudi Building Code (SBC 701/702)',
                        'Seamless coordination with HVAC and electrical teams',
                        'Turnkey warranty and emergency on-call servicing'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_26_img_01.webp', 'caption' => 'Industrial pump and valve manifold network'),
                array('img' => 'page_27_img_01.webp', 'caption' => 'Copper and compression fittings engineering'),
                array('img' => 'page_28_img_01.webp', 'caption' => 'Technicians testing stainless steel piping connections')
            ),
            'standards' => array('Saudi Building Code (SBC 701/702)', 'IPC (International Plumbing Code)', 'NWC Specifications', 'SASO'),
            'related' => array('fire-fighting-systems', 'hvac-technical-services', 'civil-structural-works')
        ),

        // 13. HVAC Technical Services
        'hvac-technical-services' => array(
            'title' => 'HVAC Technical Services & Climate Engineering',
            'category' => 'Building Services (MEP)',
            'hero_img' => 'page_28_img_02.webp',
            'tagline' => 'District Cooling, Central Chillers, VRF Systems & Cleanroom Air',
            'intro' => 'In Saudi Arabia’s extreme climate, heating, ventilation, and air conditioning (HVAC) systems are vital to occupant comfort and industrial uptime. ApexNova provides turnkey HVAC engineering, equipment supply, ducting fabrication, and automated climate control.',
            'sections' => array(
                array(
                    'title' => 'Industrial & Commercial Cooling Infrastructure',
                    'text' => 'We engineer central chilled water plants, cooling towers, Variable Refrigerant Flow (VRF) packages, and heavy air handling units (AHUs). Our systems serve large-scale projects including commercial malls, hospitals, district cooling plants, and manufacturing cleanrooms.',
                    'image' => 'page_29_img_01.webp',
                    'bullets' => array(
                        'Water-cooled and air-cooled chiller plant installation',
                        'District cooling energy transfer stations (ETS)',
                        'VRF multi-zone inverter cooling for hospitality & offices',
                        'Cleanroom positive pressure HEPA filtration systems'
                    )
                ),
                array(
                    'title' => 'Energy Efficiency & Smart Ventilation',
                    'text' => 'Energy optimization is central to our HVAC designs. We integrate Building Management Systems (BMS), variable speed drives, heat recovery wheels, and smart indoor air quality (IAQ) sensors to minimize electrical consumption while maintaining optimum humidity and fresh air.',
                    'image' => 'page_30_img_01.webp',
                    'bullets' => array(
                        'Building Management System (BMS) integration',
                        'Air duct fabrication meeting SMACNA leakage classes',
                        'Testing, Adjusting, and Balancing (TAB) certified reports',
                        'Substantial reductions in lifecycle operating expenses'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_28_img_02.webp', 'caption' => 'Rooftop industrial exhaust and air handling systems'),
                array('img' => 'page_29_img_01.webp', 'caption' => 'Commercial chiller plant and condenser units'),
                array('img' => 'page_30_img_01.webp', 'caption' => 'HVAC architectural airflow planning and duct layout')
            ),
            'standards' => array('ASHRAE Standards 62.1 / 90.1', 'SMACNA Duct Construction', 'SBC 501 (Mechanical)', 'SASO Energy Labels'),
            'related' => array('plumbing-services', 'electrical-services', 'fire-fighting-systems')
        ),

        // 14. Transformer Testing & Commissioning
        'transformer-testing-commissioning' => array(
            'title' => 'Transformer Testing & Commissioning',
            'category' => 'Electrical & Power',
            'hero_img' => 'page_43_img_01.webp',
            'tagline' => '9-Step Pre-Commissioning, Protection Relays & High-Vacuum Oil Filtration',
            'intro' => 'ApexNova delivers comprehensive transformer electrical testing, pre-commissioning, and on-site oil regeneration services across Saudi Arabia. We ensure distribution and power transformers operate safely, reliably, and efficiently prior to initial energization and after major overhauls.',
            'sections' => array(
                array(
                    'title' => 'Comprehensive Electrical Diagnostics',
                    'text' => 'Our field testing teams perform rigorous electrical assessments including Insulation Resistance (IR), Winding Resistance, Transformer Turns Ratio (TTR), Vector Group Verification, Magnetizing Current, Power Factor / Tan Delta, Bushing C1/C2 checks, and Frequency Response Analysis (FRA).',
                    'image' => 'page_44_img_02.webp',
                    'bullets' => array(
                        'Insulation resistance & polarization index (PI) testing',
                        'Transformer Turns Ratio (TTR) on all tap positions',
                        'Power factor & tan delta measurement for core and bushings',
                        'Verification against IEC 60076 and IEEE C57 standards'
                    )
                ),
                array(
                    'title' => 'Mobile Transformer Oil Filtration (OTP)',
                    'text' => 'Transformer oil filtration is a vital preventive maintenance procedure. We deploy mobile high-vacuum oil purification plants to dehydrate, degas, and filter insulating oil on-site, restoring dielectric strength (BDV > 60kV) and removing moisture and sludge without draining or replacing expensive oil.',
                    'image' => 'page_46_img_02.webp',
                    'bullets' => array(
                        'Breakdown voltage (BDV) dielectric strength testing',
                        'Moisture content analysis (Karl Fischer titration)',
                        'Dissolved Gas Analysis (DGA) for fault identification',
                        'Restoration of cooling and dielectric performance on-site'
                    )
                ),
                array(
                    'title' => 'Protection Relays & Tap Changer Testing',
                    'text' => 'We perform secondary injection testing on differential, overcurrent, restricted earth-fault (REF), and voltage protection relays, alongside Buchholz gas trip and temperature gauge verifications. On-load tap changers (OLTC) undergo contact resistance and sequence timing tests.',
                    'image' => 'page_47_img_02.webp',
                    'bullets' => array(
                        'Secondary injection testing on differential & REF relays',
                        'Buchholz relay and pressure relief device trip testing',
                        'OLTC contact resistance, transition time, and limit switches',
                        'Complete pre-energization checklist and handover dossier'
                    )
                )
            ),
            'timeline_steps' => array(
                array('num' => 1, 'title' => 'Electrical Pre-Commissioning Tests', 'desc' => 'IR, winding resistance, TTR ratio, vector group, magnetizing current, and tan delta testing.'),
                array('num' => 2, 'title' => 'Transformer Oil Testing & Filtration', 'desc' => 'Oil sampling, BDV dielectric check, DGA analysis, and high-vacuum degassing/purification.'),
                array('num' => 3, 'title' => 'Protection & Control Verification', 'desc' => 'Differential, overcurrent, earth-fault, Buchholz trip, and temperature gauge simulation.'),
                array('num' => 4, 'title' => 'Tap Changer (OLTC) Testing', 'desc' => 'Tap position verification, contact resistance, motor drive mechanism, and interlocks.'),
                array('num' => 5, 'title' => 'Functional & Control Circuit Checks', 'desc' => 'Communication between tap changer, cooling fans, SCADA RTU, and substation interlocks.'),
                array('num' => 6, 'title' => 'Pre-Energization Final Checklist', 'desc' => 'Earthing integrity, oil level verification, bushing creepage, and safety perimeter check.'),
                array('num' => 7, 'title' => 'Controlled Initial Energization', 'desc' => 'No-load energization under close voltage monitoring for inrush current behavior.'),
                array('num' => 8, 'title' => 'Soak Test & Thermal Imaging', 'desc' => '24-hour no-load soak testing, thermographic hot-spot scanning, and acoustic analysis.'),
                array('num' => 9, 'title' => 'Documentation & Handover', 'desc' => 'Complete test dossiers, calibration certificates, and formal utility handover sign-off.')
            ),
            'gallery' => array(
                array('img' => 'page_43_img_01.webp', 'caption' => 'Transformer substation pre-commissioning testing'),
                array('img' => 'page_44_img_02.webp', 'caption' => 'High-voltage bushing inspection on top turret'),
                array('img' => 'page_45_img_01.webp', 'caption' => 'Substation switchgear control panel testing crew'),
                array('img' => 'page_46_img_01.webp', 'caption' => 'Mobile BDV dielectric strength test kit'),
                array('img' => 'page_46_img_02.webp', 'caption' => 'High-vacuum transformer oil filtration plant trailer'),
                array('img' => 'page_47_img_02.webp', 'caption' => 'Relay secondary injection testing equipment'),
                array('img' => 'page_48_img_02.webp', 'caption' => 'On-load tap changer (OLTC) mechanism inspection')
            ),
            'standards' => array('IEC 60076', 'IEEE C57.104 / C57.106', 'ASTM D877 / D1816', 'SEC Substation Specs'),
            'related' => array('electrical-services', 'scada-automation', 'solar-renewable-energy')
        ),

        // 15. Electrical Services
        'electrical-services' => array(
            'title' => 'Electrical Services & Power Distribution',
            'category' => 'Electrical & Power',
            'hero_img' => 'page_40_img_01.webp',
            'tagline' => 'High, Medium & Low Voltage Distribution Across Industrial Facilities',
            'intro' => 'ApexNova provides comprehensive power and electrical contracting across the entire energy chain—from substation high voltage transmission down to medium and low voltage distribution boards for factories, commercial towers, and utility infrastructure.',
            'sections' => array(
                array(
                    'title' => 'End-to-End Power Chain Architecture',
                    'text' => 'We execute full power distribution networks connecting: Generation → Transmission (HV) → Substation → MV Distribution → Distribution Transformers → LV Switchgear → Industrial End-Users, managing voltages up to 132kV, 220kV, and 400kV.',
                    'image' => 'page_40_img_01.webp',
                    'bullets' => array(
                        'High Voltage (HV) and Medium Voltage (MV) substations',
                        'Primary and secondary power supplies',
                        'Harmonic mitigation and power-factor correction capacitors',
                        'Uninterrupted Power Supply (UPS) and standby diesel generators'
                    )
                ),
                array(
                    'title' => 'Cable Laying, Glanding & Termination',
                    'text' => 'We execute specialized power cable installation through planned routes, trenches, duct banks, and cable tray systems. Our certified jointers perform mechanical glanding and high-voltage heat-shrink and cold-shrink terminations ensuring zero electrical breakdown.',
                    'image' => 'page_42_img_01.webp',
                    'bullets' => array(
                        'Trench pulling, duct bank rodding, and ladder tray installation',
                        'Heavy armored cable glanding providing mechanical grounding',
                        'MV/HV stress cone termination and hi-pot testing',
                        'Cable labeling and laser-traced schematic mapping'
                    )
                ),
                array(
                    'title' => 'MDB, SMDB & DB Switchgear Installation',
                    'text' => 'We supply, install, and calibrate Main Distribution Boards (MDB), Sub-Main Distribution Boards (SMDB), and final branch Distribution Boards (DB), as well as dedicated motor control centers (MCC) and lightning protection earthing meshes.',
                    'image' => 'page_42_img_02.webp',
                    'bullets' => array(
                        'Form 4b type-tested main switchboard panels',
                        'Busbar trunking and automatic transfer switches (ATS)',
                        'Low-resistance earthing grids and lightning air terminals',
                        'Internal and external architectural energy-efficient lighting'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_40_img_01.webp', 'caption' => 'Power generation and substation transmission towers'),
                array('img' => 'page_41_img_01.webp', 'caption' => 'Industrial plant electrical cable network at sunset'),
                array('img' => 'page_41_img_02.webp', 'caption' => 'Commercial facility illumination and power distribution'),
                array('img' => 'page_42_img_01.webp', 'caption' => '3-step cable laying, glanding, and termination process'),
                array('img' => 'page_42_img_02.webp', 'caption' => 'Substation MDB and SMDB switchgear panel bank')
            ),
            'standards' => array('IEC 61439', 'BS 7671 / IET Wiring', 'NFPA 70 (NEC)', 'SEC Construction Specs', 'SASO'),
            'related' => array('transformer-testing-commissioning', 'fiber-optic-telecommunication', 'solar-renewable-energy')
        ),

        // 16. Fiber Optic & Telecom
        'fiber-optic-telecommunication' => array(
            'title' => 'Fiber Optic & Telecommunication Services',
            'category' => 'Electrical & Power',
            'hero_img' => 'page_54_img_02.webp',
            'tagline' => 'High-Capacity Fiber Networks, Fusion Splicing & OTDR Testing',
            'intro' => 'ApexNova provides turnkey fiber optic network design, micro-trenching, cable blowing, precision fusion splicing, and optical testing connecting smart buildings, industrial plants, and telecom backbones across Saudi Arabia.',
            'sections' => array(
                array(
                    'title' => 'Planning-First Optical Architecture',
                    'text' => 'A robust fiber optic installation begins long before cable is pulled. We evaluate site constraints—corporate offices, logistics plants, and oil facilities—designing route pathways, conduit runs, telecom room MDF/IDFs, and redundant ring topologies that allow seamless future scaling.',
                    'image' => 'page_54_img_01.webp',
                    'bullets' => array(
                        'Pathway engineering, duct proving, and micro-conduit blowing',
                        'Multi-pair single-mode (OS2) and multimode (OM4/OM5) fiber',
                        'Carrier-grade telecom room and ODF rack integration',
                        'Backbone connectivity for IP telephony, CCTV, and SCADA'
                    )
                ),
                array(
                    'title' => 'Precision Fusion Splicing & Testing',
                    'text' => 'Our fiber technicians utilize core-alignment fusion splicers inside climate-controlled splicing vans. Every splice is evaluated for loss (<0.02dB) and validated via Optical Time-Domain Reflectometer (OTDR) bidirectional trace testing and power-meter certification.',
                    'image' => 'page_54_img_03.webp',
                    'bullets' => array(
                        'Core-alignment automated arc fusion splicing',
                        'Bidirectional OTDR trace testing and event mapping',
                        'Optical Loss Test Set (OLTS) Tier-1 & Tier-2 certification',
                        'Complete splice enclosure sealing and underground vaults'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_54_img_01.webp', 'caption' => 'Fiber cable duct feeding and conduit installation'),
                array('img' => 'page_54_img_02.webp', 'caption' => 'Precision fusion splicing in mobile clean tent'),
                array('img' => 'page_54_img_03.webp', 'caption' => 'Underground fiber conduit trench and handhole pull'),
                array('img' => 'page_55_img_01.webp', 'caption' => 'Telecom rack distribution and ODF termination')
            ),
            'standards' => array('TIA/EIA-568', 'ISO/IEC 11801', 'ITU-T G.652D', 'CITC Saudi Telecom Regulations'),
            'related' => array('electrical-services', 'scada-automation', 'civil-structural-works')
        ),

        // 17. Solar & Renewable Energy
        'solar-renewable-energy' => array(
            'title' => 'Solar & Renewable Energy Solutions',
            'category' => 'Electrical & Power',
            'hero_img' => 'page_35_img_01.webp',
            'tagline' => 'Industrial Solar PV, Supplier Sustainability & Grid-Tied Clean Energy',
            'intro' => 'In alignment with the Saudi Green Initiative and Vision 2030, ApexNova provides end-to-end solar photovoltaic (PV) engineering, installation, and clean energy consulting for industrial supply chains and commercial clients looking to reduce carbon intensity and power costs.',
            'sections' => array(
                array(
                    'title' => 'Commercial & Industrial Solar PV',
                    'text' => 'We design and construct rooftop, carport, and ground-mounted solar PV systems for factories, distribution centers, and commercial properties. We manage structural load evaluations, inverter synchronization, and bidirectional grid-tie metering with SEC.',
                    'image' => 'page_36_img_01.webp',
                    'bullets' => array(
                        'Tier-1 monocrystalline bifacial solar modules',
                        'Central and string inverters with high conversion efficiency',
                        'Custom corrosion-resistant mounting structures for KSA climate',
                        'Net-metering integration with Saudi Electricity Company'
                    )
                ),
                array(
                    'title' => 'Supplier Sustainability & Energy Audits',
                    'text' => 'We work closely with Tier-1 industrial partners and supply chain vendors to evaluate energy footprints, identify viable clean energy transition options, and calculate payback periods, supporting corporate ESG and environmental leadership.',
                    'image' => 'page_37_img_01.webp',
                    'bullets' => array(
                        'Comprehensive facility energy audits and load profiling',
                        'Long-term electricity cost hedging and predictable ROI',
                        'Reduction of corporate carbon footprint and Scope 2 emissions',
                        'Ongoing solar panel cleaning, thermography, and maintenance'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_35_img_01.webp', 'caption' => 'Solar PV farm with wind turbine clean energy background'),
                array('img' => 'page_36_img_01.webp', 'caption' => 'Technician inspecting monocrystalline solar PV panels'),
                array('img' => 'page_37_img_01.webp', 'caption' => 'Large-scale wind turbine clean power installation')
            ),
            'standards' => array('IEC 61215 / IEC 61730', 'Saudi Building Code (SBC 1001)', 'SEC Solar Connection Standards'),
            'related' => array('electrical-services', 'transformer-testing-commissioning', 'hvac-technical-services')
        ),

        // 18. Horizontal Directional Drilling (HDD)
        'horizontal-directional-drilling' => array(
            'title' => 'Horizontal Directional Drilling (HDD)',
            'category' => 'Mechanical & Industrial',
            'hero_img' => 'page_38_img_01.webp',
            'tagline' => 'Trenchless Pipeline Crossings, Hard-Rock Reaming & Road Thrusting',
            'intro' => 'ApexNova executes trenchless pipeline installations using advanced Horizontal Directional Drilling (HDD) technology. HDD enables pipelines and utility conduits to cross beneath highways, runways, railways, and congested corridors without disturbing surface traffic or infrastructure.',
            'sections' => array(
                array(
                    'title' => 'Pilot Bore Steering & Guidance',
                    'text' => 'Our operations begin with precision pilot drilling along an engineered 3D trajectory. Utilizing digital walkover and magnetic steering tools, our drillers navigate through underground obstructions, maintaining tight design clearances.',
                    'image' => 'page_38_img_01.webp',
                    'bullets' => array(
                        'Trenchless crossings beneath active highways and airport aprons',
                        'Electromagnetic sonde guidance ensuring millimeter trajectory',
                        'Drilling fluids (bentonite/polymers) for borehole stabilization',
                        'Zero traffic disruption and zero environmental surface impact'
                    )
                ),
                array(
                    'title' => 'Heavy Rock Reaming & Pipe Pullback',
                    'text' => 'Following pilot drilling, welded hole openers (tricone roller cone reamers) expand the borehole in successive stages. Engineered for extreme torque and hard rock formations (shale, limestone, granite), these reamers prepare the bore for smooth pipeline pullback.',
                    'image' => 'page_39_img_01.webp',
                    'bullets' => array(
                        'Tricone roller-cone rock reamers for hard geological strata',
                        'Multi-stage bore enlargement up to 48" diameter',
                        'High-torque drill rigs with continuous pullback monitoring',
                        'Installation of steel fuel, water, and electrical conduits'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_38_img_01.webp', 'caption' => 'Horizontal directional drilling rig deployed on project'),
                array('img' => 'page_39_img_01.webp', 'caption' => 'Tracked mechanical HDD drilling rig assembly')
            ),
            'standards' => array('ASTM F1962', 'PRCI Guidelines', 'Saudi Ministry of Transport HDD Specs'),
            'related' => array('aviation-fuel-systems', 'pipeline-coating', 'civil-structural-works')
        ),

        // 19. Civil & Structural Works
        'civil-structural-works' => array(
            'title' => 'Civil & Structural Works',
            'category' => 'Civil & Construction',
            'hero_img' => 'page_59_img_01.webp',
            'tagline' => 'Turnkey Heavy Foundations, Precast, Hospitality, Commercial & Logistics',
            'intro' => 'ApexNova delivers end-to-end civil construction, heavy equipment foundations, and structural engineering across Riyadh and the Kingdom of Saudi Arabia for commercial towers, luxury hospitality, logistics hubs, and industrial plants.',
            'sections' => array(
                array(
                    'title' => 'Comprehensive Civil Engineering Scope',
                    'text' => 'Our civil engineering division takes full responsibility for site preparation, deep excavation, backfilling, compaction, plain and reinforced concrete (PCC & RCC), equipment support foundations, concrete plinths, bund walls, manholes, culverts, roads, asphalt paving, and stormwater drainage.',
                    'image' => 'page_60_img_01.webp',
                    'bullets' => array(
                        'Site preparation, mass earthworks, excavation and compaction',
                        'Heavy transformer and rotating equipment concrete foundations',
                        'Bulk tank containment foundations and protective bund walls',
                        'Underground drainage, precast culverts, and utility manholes',
                        'Core cutting, concrete breaking, structural modifications, and waterproofing'
                    )
                ),
                array(
                    'title' => 'Commercial, Hospitality & Industrial Hubs',
                    'text' => 'Operating at the forefront of Riyadh’s expansion, we construct luxury hospitality real estate, high-rise commercial facilities, and expansive logistics warehouses. We specialize in wide-span Pre-Engineered Steel Buildings (PEB) and high-load industrial flooring.',
                    'image' => 'page_59_img_01.webp',
                    'bullets' => array(
                        'Commercial office towers and fast-track retail destinations',
                        'Five-star luxury hospitality and acoustic privacy suites',
                        'Massive logistics centers, cold storage, and manufacturing plants',
                        'Wide-span Pre-Engineered Steel Buildings (PEB) with heavy floor loads'
                    )
                )
            ),
            'gallery' => array(
                array('img' => 'page_59_img_01.webp', 'caption' => 'Steel support structure and warehouse frame installation'),
                array('img' => 'page_60_img_01.webp', 'caption' => 'Heavy civil foundations and equipment plinths in Riyadh')
            ),
            'standards' => array('Saudi Building Code (SBC 301-306)', 'ACI 318 Concrete', 'AISC 360 Structural Steel', 'ASTM C94'),
            'related' => array('mechanical-industrial-solutions', 'electrical-services', 'plumbing-services')
        )
    );
}

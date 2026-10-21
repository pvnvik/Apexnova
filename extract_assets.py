import os
import fitz # PyMuPDF
from PIL import Image
import io

pdf_path = r"C:\Users\vikrant\Downloads\Web Site contant (02).pdf"
out_dir = r"c:\Users\vikrant\Desktop\Apexnova\wp-content\uploads\extracted"
os.makedirs(out_dir, exist_ok=True)

doc = fitz.open(pdf_path)
print(f"Total pages: {len(doc)}")

img_count = 0
for page_num in range(len(doc)):
    page = doc[page_num]
    image_list = page.get_images(full=True)
    for img_idx, img_info in enumerate(image_list):
        xref = img_info[0]
        base_image = doc.extract_image(xref)
        image_bytes = base_image["image"]
        image_ext = base_image["ext"]
        
        try:
            pil_img = Image.open(io.BytesIO(image_bytes))
            # Save original and webp
            filename_base = f"page_{page_num+1:02d}_img_{img_idx+1:02d}"
            save_path = os.path.join(out_dir, f"{filename_base}.{image_ext}")
            with open(save_path, "wb") as f:
                f.write(image_bytes)
            
            webp_path = os.path.join(out_dir, f"{filename_base}.webp")
            if pil_img.mode in ("RGBA", "LA") or (pil_img.mode == "P" and "transparency" in pil_img.info):
                pil_img.save(webp_path, "WEBP", quality=85)
            else:
                pil_img.convert("RGB").save(webp_path, "WEBP", quality=85)
                
            img_count += 1
            print(f"Extracted Page {page_num+1} Image {img_idx+1}: {pil_img.size} -> {filename_base}.webp")
        except Exception as e:
            print(f"Error on page {page_num+1} img {img_idx+1}: {e}")

print(f"Total images extracted: {img_count}")

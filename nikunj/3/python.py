import cv2
import pytesseract

img = cv2.imread('C:/xampp/htdocs/nikunj/3/uploadimage2.png')

text = pytesseract.image_to_string(img)

# print(img)

# pytesseract.pytesseract.tesseract_cmd = 'C:/Program Files/Tesseract-OCR/tesseract.exe'
 

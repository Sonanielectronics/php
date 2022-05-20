import matplotlib.pyplot as plt
import cv2
import easyocr
from pylab import rcParams
from IPython.display import Image
from tkinter import *
from tkinter import filedialog
import tempfile
import subprocess
import pytesseract as pt
from PIL import ImageTk, Image
import pytesseract
from pytesseract import pytesseract
import os

path_to_tesseract = r"C:\Program Files\Tesseract-OCR\tesseract.exe"
image_path = r"upload-files\docx.docx"

img = Image.open(image_path)

pytesseract.tesseract_cmd = path_to_tesseract

text = pytesseract.image_to_string(img)

# print(text)

with open("download2.csv", 'w') as file:
    file.write(text)
    file.close()
    pass

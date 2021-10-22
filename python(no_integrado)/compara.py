import cv2
import numpy as np
import os

path = r'C:\Users\Sistemas\Documents\imagenes\firma3.png'
path2 = r'C:\Users\Sistemas\Documents\imagenes\firma10.png'

imagen1 = cv2.imread(path)
imagen2 = cv2.imread(path2)

difference = cv2.subtract(imagen1, imagen2)
b, g, r = cv2.split(difference)
print(cv2.countNonZero(b))
if (cv2.countNonZero(b) == 0 and cv2.countNonZero(g) == 0 and cv2.countNonZero(r) == 0):
    print('Las imagenes son completamente iguales')
else: 
    print('Las imagenes no son iguales')

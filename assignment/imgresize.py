import cv2
import imutils

img = cv2.imread('./as5.jpg')
img = imutils.resize(img, width = 400)
cv2.imwrite('./as2.jpg', img)

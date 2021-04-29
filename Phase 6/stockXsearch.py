#!/usr/bin/env python3
import requests
from urllib.request import urlopen
import ssl
from bs4 import BeautifulSoup

ssl._create_default_https_context = ssl._create_unverified_context
url = "https://stockx.com/air-jordan-1-retro-high-bio-hack"
try:
	page = urlopen("https://stockx.com/air-jordan-1-retro-high-bio-hack")
except:
	print("Error opening the URL")
	#page = urlopen("https://stockx.com/air-jordan-1-retro-high-bio-hack")
soup = BeautifulSoup(page, 'html.parser')
content = soup.find('div', {"class": "en-us stat-value stat-small css-k008qs"})
print(content)
import requests	

f = open("./searchItem.txt","r")
item = f.readline()
f.close()
url = "https://api.tcgplayer.com/catalog/products"
querystring = {"productName":item}

headers = {"Accept": "application/json","Authorization": 'bearer enoM9gqAONT2sjJowPFv7wlnBw5eXCK_h9hp4MqVe1f0Se9TA0K2OmLKYcChBy_eqgJBjjv_9kjZGAg7ogDhA_d6jyqp8O3kFxczUA6W8ArR7diqQPIDlHBLQV1REkDfpwi4zHKElTZWRLO109_bHZY_oIdDWufStoJIrd1kRZI74K3y4rvOiZJuyAkZF6MIjjsH06MuL8bdbW0JXy3gsQt-rj3HXJXTXIB3ocIRIKQkKF1o9f7eccjtS5tS1sPMB9emh9_4_bESA7TD9zUL1kbSUWFtIPsxH5CGoJvUwXM2sfQOLAHlFzsXMhZi8XZiKOPv8g'}

response = requests.request("GET", url, headers=headers, params=querystring)

successind = response.text.find('success')+9

if response.text[successind:successind+4] == 'true':
	idInd = response.text.find('productId') + 11
	
	endIdInd= response.text.find(',', idInd)
	imageInd = response.text.find('imageUrl') + 11
	endImageInd = response.text.find(',', imageInd) - 1

	prodIdCount = response.text.count('productId')
	counter = 0
	done = 0
	while done == 0 and counter < prodIdCount:
		url2 = "https://api.tcgplayer.com/pricing/marketprices/" + response.text[idInd:endIdInd]
		response2 = requests.request("GET", url2, headers=headers)
		
		check = response2.text[11:15]
		
		if check == 'true':
			lowInd = response2.text.find('lowestRange') + 13
			lowEnd = response2.text.find(',', lowInd)

			midInd = response2.text.find('price') + 7
			midEnd = response2.text.find(',', midInd)
	
			highInd = response2.text.find('highestRange') + 14
			highEnd = response2.text.find('}',highInd)
				
			productUrlInd = response.text.find('url', idInd) + 6
			endProductUrlInd = response.text.find(',', productUrlInd) - 1
			
			print(response.text[successind:successind+4] + " " + response.text[imageInd:endImageInd] + " " + check + " " + response2.text[highInd:highEnd] + " " + response2.text[lowInd:lowEnd] + " " + response2.text[midInd:midEnd] + " " + response.text[productUrlInd:endProductUrlInd])
			done = 1

		idInd = response.text.find('productId', endIdInd) + 11
		endIdInd = response.text.find(',',idInd)
		counter+=1
	if done == 0:
		print(response.text[successind:successind+4] + " " + response.text[imageInd:endImageInd] + " " + check + " None None None None")


else:
	print('Need valid card')

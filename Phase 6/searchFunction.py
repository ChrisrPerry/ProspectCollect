#!/usr/bin/env python3

import requests
from flask import Flask
url = "https://api.tcgplayer.com/pricing/marketprices/14986"
#querystring = {"productName":"Sliver Legion"}

headers = {"Accept": "application/json","Authorization": 'bearer enoM9gqAONT2sjJowPFv7wlnBw5eXCK_h9hp4MqVe1f0Se9TA0K2OmLKYcChBy_eqgJBjjv_9kjZGAg7ogDhA_d6jyqp8O3kFxczUA6W8ArR7diqQPIDlHBLQV1REkDfpwi4zHKElTZWRLO109_bHZY_oIdDWufStoJIrd1kRZI74K3y4rvOiZJuyAkZF6MIjjsH06MuL8bdbW0JXy3gsQt-rj3HXJXTXIB3ocIRIKQkKF1o9f7eccjtS5tS1sPMB9emh9_4_bESA7TD9zUL1kbSUWFtIPsxH5CGoJvUwXM2sfQOLAHlFzsXMhZi8XZiKOPv8g'}

response = requests.request("GET", url, headers=headers)

print(response.text)
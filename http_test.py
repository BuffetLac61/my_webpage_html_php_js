#!/bin/python3
import requests
url_list = ["http://httpstat.us/503", "http://httpstat.us/204", "http://httpstat.us/404", "http://httpstat.us/301", "http://httpstat.us/999", "https://app.jedha.co/", "https://jedha.co/"]

def status_checker (url) :
    r = requests.get(url)
    return r.status_code

if __name__ == "__main__" :
    for url in url_list :
        print(f"Status code for {url} is {status_checker(url)}")
        


    
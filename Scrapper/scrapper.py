
import datetime

from bs4 import BeautifulSoup
import urllib.request
import queries as DB

## Necesario para scrapper de Titicupon ----------------------
baseUrlTiticupon = "https://www.titicupon.com"
cupons = []
## -----------------------------------------------------------

def scrapTiticuponAux(linkBtn, category):
    page2 = urllib.request.urlopen(baseUrlTiticupon + linkBtn)
    page_html2 = page2.read()
    soupAux = BeautifulSoup(page_html2, 'lxml')
    title = soupAux.find("h1", class_="cupon-title").get_text()
    subtitle = soupAux.find("h2", class_="cupon-subtitle").get_text()
    img = soupAux.find('div', attrs={"class":"views-row views-row-0 views-row-first views-row-odd"})
    imgSrc = img.find('img')['src']

    price = soupAux.find('h3', class_='max-price').get_text()
    normalPrice = soupAux.find('h4', class_='normal-price').get_text()
    save = soupAux.find('div', class_='saving-wrapper').get_text()
    sold = soupAux.find('p', class_='active').get_text()

    info = soupAux.find(class_='item-info')
    city = info.find('li').get_text()
    
    period = info.find(class_='redeem').get_text()
    
    
    save = save.split('Ahorre ')
    save = save[1]
    sold = sold.split(' ')
    sold = sold[1]
    city = city.split('\nProvincia: ')
    city = city[1].strip()
    
    cuponData = [title, subtitle, imgSrc, price, normalPrice, save, sold,
                 city, period, category]
    try:
        website = soupAux.find(class_='no-bullets reset-list')
        websiteSrc = website.find('a')['href']
        cuponData.append(websiteSrc)
    except:
        cuponData.append("null")
    
    cupons.append(cuponData)

def scrapTiticupon():
    print("Scrapping...")
    
    page = urllib.request.urlopen(baseUrlTiticupon)
    page_html = page.read()
    soup = BeautifulSoup(page_html, 'lxml')

    elements = soup.find_all("div", class_="grid-item")


    e = [x.get_text() for x in elements[:-6]]
    

    row = 1
    column = 1
    btnsUrls = soup.find_all('div', attrs={"class":"btn-wrapper"})
    categoryList = soup.find_all('h5', class_='tag-icon')
    btnsUrls = btnsUrls[4:]
    for i in range(len(btnsUrls)):
        link = btnsUrls[i].find('a')['href']
        category = categoryList[i].get_text().strip()
        scrapTiticuponAux(link, category)
        
        if column == 4: 
            column = 1
            row += 1
        else:
            column += 1

    DB.insertCuponInfo(cupons)
    print("Titicupon scrapper completed...")



scrapTiticupon()




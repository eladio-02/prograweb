
import datetime
from urllib.request import urlopen
from bs4 import BeautifulSoup
import urllib.request


print("Scrapping...")
'''
#---------------------------------TITICUPON------------------------------------
baseUrl = "https://www.titicupon.com"
page = urllib.request.urlopen(baseUrl)
page_html = page.read()
soup = BeautifulSoup(page_html, 'lxml')

elements = soup.find_all("div", class_="grid-item")


e = [x.get_text() for x in elements[:-6]]
cupons = []

def scrap(linkBtn, category):
    page2 = urllib.request.urlopen(baseUrl + linkBtn)
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
    
    
    
    cuponData = [title, subtitle, imgSrc, price, normalPrice, save, sold,
                 city, period, category]
    try:
        website = soupAux.find(class_='no-bullets reset-list')
        websiteSrc = website.find('a')['href']
        cuponData.append(websiteSrc)
    except:
        cuponData.append("null")


    print(cuponData)
    
    cupons.append(cuponData)



row = 1
column = 1
btnsUrls = soup.find_all('div', attrs={"class":"btn-wrapper"})
categoryList = soup.find_all('h5', class_='tag-icon')
for i in range(len(btnsUrls)):
    link = btnsUrls[i].find('a')['href']
    category = categoryList[i].get_text().strip()
    scrap(link, category)
    
    if column == 4: 
        column = 1
        row += 1
    else:
        column += 1

'''
#--------------------------------------YUPLON-------------------------------------

class yuplonCoupon:
    def __init__(self,title, img, price, normalPrice,save, discount, sold_amount, info,location,period):
        self.title = title
        self.img = img
        self.price = price
        self.normalPrice = normalPrice
        self.save = save
        self.discount = discount
        self.sold_amount = sold_amount
        self.info = info
        self.location = location
        self.period = period
cupones = []

webPage = urlopen('http://www.yuplon.com/').read()

scrap =  BeautifulSoup(webPage,"html.parser")

ofertas = scrap.find_all("div",attrs={"class":"extra-campaign"})
#Se visita cada una de las ofertas para obtener los datos
def scrapYuplon():

    for oferta in ofertas:
        linkOferta = oferta.a["href"]
        urlOferta = urlopen('http://www.yuplon.com'+ linkOferta)
        couponScrapper = BeautifulSoup(urlOferta,"html.parser")
        title = couponScrapper.find("h3",attrs={"class":"title"}).get_text()
        image = couponScrapper.find_all("div",attrs={"id":"slideshow"})
        imageUrl= image[0].img["src"]
        price = couponScrapper.find("div",attrs={"class":"txt-label-price"}).get_text()
        dealDiv = couponScrapper.find("div",attrs={"id":"deal-box"})
        tr = dealDiv.find_all("tr")

        td = tr[1].find_all("td")
        normalPrice = td[0].get_text()
        save = td[2].get_text()
        discount = td[1].get_text()

        soldAmount = couponScrapper.find("div",attrs={"class":"sold-text-locker"}).get_text()
        content = couponScrapper.find("div",attrs={"id":"content-block"}).get_text()
        aux = couponScrapper.find("div",attrs={"id":"main-right-yellowbox"})
        period = aux.find_all("li")[0].get_text()
        info = couponScrapper.find_all("div",attrs={"class":"info-retailer"})
        try:
            location = info[1].get_text()
        except:
            location = "No especificado"
        #print(title, imageUrl,price,normalPrice,save,discount,soldAmount,content,location,period)
        coupon = yuplonCoupon(title,imageUrl,price,normalPrice,save,discount,soldAmount,content,location,period)
        cupones.append(coupon)

scrapYuplon()
for cupon in cupones:
    print(cupon.title,cupon.price)
#DB.insertAuditoria(str(datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S')), "Sin errorres", "Finalizado", len(cupons))

#DB.insertCuponInfo(cupons)

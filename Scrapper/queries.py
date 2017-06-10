
import psycopg2
import datetime

def insertPromocionInfo(cupons):
    try:
        conn = psycopg2.connect(database="doarrt0cg9n01", user="rrnehdokxzlvbt",
                            password="79f8523618cb99e196f7ef6786d5d72cf4ae241aba968eacf65c8daa940dff8f",
                            host="ec2-54-243-124-240.compute-1.amazonaws.com",
                            port="5432")
        cur = conn.cursor()
        for j in range(len(cupons)):
            print(len(cupons[j]))
            
            print("INSERT INTO promocion (title, img, price, normalPrice, save, discount, sold_amount, info, location, period, active) \
              VALUES ('"+cupons[j][0]+"','"+cupons[j][1]+"','"+cupons[j][2]+"','"+cupons[j][3]+"','"+cupons[j][4]+"','"+cupons[j][5]+"','"+cupons[j][6]+"','"+cupons[j][7]+"','"+
                        cupons[j][8]+"','"+cupons[j][9]+"','"+'1'+"');")
            cur.execute("INSERT INTO promocion (title, img, price, normalPrice, save, discount, sold_amount, info, location, period, active) \
              VALUES ('"+cupons[j][0]+"','"+cupons[j][1]+"','"+cupons[j][2]+"','"+cupons[j][3]+"','"+cupons[j][4]+"','"+cupons[j][5]+"','"+cupons[j][6]+"','"+cupons[j][7]+"','"+
                        cupons[j][8]+"','"+cupons[j][9]+"','"+'1'+"');")
            conn.commit()
        conn.close()
        
    except:
        print("Ha ocurrido un problema con la insercion de los cupones")


    
def insertCuponInfo(cupons):
    try:
        conn = psycopg2.connect(database="doarrt0cg9n01", user="rrnehdokxzlvbt",
                            password="79f8523618cb99e196f7ef6786d5d72cf4ae241aba968eacf65c8daa940dff8f",
                            host="ec2-54-243-124-240.compute-1.amazonaws.com",
                            port="5432")
        cur = conn.cursor()
        for j in range(len(cupons)):
##            print(len(cupons[j]))
##            
##            print("INSERT INTO cupon (title, subtitle, imgSrc, price, normalPrice, save, sold, city, period, category, websiteSrc, active) \
##              VALUES ('"+cupons[j][0]+"','"+cupons[j][1]+"','"+cupons[j][2]+"','"+cupons[j][3]+"','"+cupons[j][4]+"','"+cupons[j][5]+"','"+cupons[j][6]+"','"+cupons[j][7]+"','"+
##                        cupons[j][8]+"','"+cupons[j][9]+"','"+cupons[j][10]+"','"+'1'+"');")
            cur.execute("INSERT INTO cupon (title, subtitle, imgSrc, price, normalPrice, save, sold, city, period, category, websiteSrc, active) \
              VALUES ('"+cupons[j][0]+"','"+cupons[j][1]+"','"+cupons[j][2]+"','"+cupons[j][3]+"','"+cupons[j][4]+"','"+cupons[j][5]+"','"+cupons[j][6]+"','"+cupons[j][7]+"','"+
                        cupons[j][8]+"','"+cupons[j][9]+"','"+cupons[j][10]+"','"+'1'+"');")
            conn.commit()
        conn.close()
        
    except:
        print("Ha ocurrido un problema con la insercion de los cupones")
    
    


    


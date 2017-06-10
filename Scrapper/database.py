import psycopg2

conn = psycopg2.connect(database="doarrt0cg9n01", user="rrnehdokxzlvbt",
                        password="79f8523618cb99e196f7ef6786d5d72cf4ae241aba968eacf65c8daa940dff8f",
                        host="ec2-54-243-124-240.compute-1.amazonaws.com",
                        port="5432")

def createTables():
    cur = conn.cursor()
    cur.execute('''SET TIME ZONE 'America/Costa_Rica';''')
    
    cur.execute('''CREATE TABLE Cupon
       (title TEXT NOT NULL,
        subtitle TEXT NOT NULL,
        imgSrc TEXT NOT NULL,
        price TEXT NOT NULL,
        normalPrice TEXT NOT NULL,
        save TEXT NOT NULL,
        sold TEXT NOT NULL,
        city TEXT NOT NULL,
        period TEXT NOT NULL,
        category TEXT NOT NULL,
        websiteSrc TEXT NOT NULL,
        active INT NOT NULL,
        date TIMESTAMP DEFAULT NOW(),
        id SERIAL PRIMARY KEY
        
        );''')

    cur.execute('''CREATE TABLE Promocion
       (title TEXT NOT NULL,
        img TEXT NOT NULL,
        price TEXT NOT NULL,
        normalPrice TEXT NOT NULL,
        save TEXT NOT NULL,
        discount TEXT NOT NULL,
        sold_amount TEXT NOT NULL,
        info TEXT NOT NULL,
        location TEXT NOT NULL,
        period TEXT NOT NULL,
        active INT NOT NULL,
        date TIMESTAMP DEFAULT NOW(),
        id SERIAL PRIMARY KEY
        
        );''')
    
    print("Table created successfully")

    conn.commit()
    conn.close()

createTables()

-- tabel customer
create table if not exists customer(
    username char(20) PRIMARY KEY, 
    nama_cust varchar(30) NOT NULL, 
    password_cust char(20) NOT NULL
);
-- add customer
INSERT INTO customer VALUES
('member1','Mia Khalifa','12345');

-- *** --

-- tabel produk
create table if not exists produk(
    id_produk char(4) PRIMARY KEY, 
    nama_operator varchar(10) NOT NULL, 
    harga_tambahan int(7)
);
-- add produk
INSERT INTO produk VALUES
('Tel1','Telkomsel',2500),
('Ind2','Indosar',2250),
('Xl03','XL',2000),
('Axi4','Axis',1750),
('Tri5','Tri',1500),
('Sma6','Smartfren',1250),
('Bol7','Bolt',1000);

-- *** --

-- tabel promo
create table if not exists promo(
    kd_promo char(16) PRIMARY KEY, 
    potongan int(7), 
    status boolean DEFAULT true
);
-- add produk
INSERT INTO promo VALUES
('1234567890123456',5000,DEFAULT),
('1231231231231231',7000,DEFAULT),
('4321432143214321',3000,DEFAULT);

-- *** ---

-- tabel admin
create table if not exists admin(
    id_admin char(6) PRIMARY KEY, 
    nama varchar(20) NOT NULL, 
    password_admin char(20) NOT NULL
);
-- add produk
INSERT INTO admin VALUES
('Budi12','Asep Budiyana M','aku123');

-- tabel pesanan
create table pesanan(
    id_pesanan int(50) PRIMARY KEY, 
    waktu timestamp, 
    status_pembayaran boolean DEFAULT false, 
    status_pengiriman boolean DEFAULT false, 
    nomor_hp char(12) NOT NULL, 
    nominal int(7), 
username char(20), id_produk char(4), kd_promo char(16), id_admin char(6), 
FOREIGN KEY (username) REFERENCES customer(username),
FOREIGN KEY (id_produk) REFERENCES produk(id_produk),
FOREIGN KEY (kd_promo) REFERENCES promo(kd_promo),
FOREIGN KEY (id_admin) REFERENCES admin(id_admin)
);
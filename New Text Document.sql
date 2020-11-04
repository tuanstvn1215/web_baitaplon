CREATE database web;
use web;
CREATE TABLE NhomHangHoa(
	MaNhom char(5) PRIMARY KEY,
	TenNhom varchar(50) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE HangHoa(
	MSHH char(5) PRIMARY KEY,
	TenHH varchar(50) not null,
	Gia int not null,
	SoLuongHang tinyint not null,
	MaNhom char(5) not null,
	Hinh varchar(50) not null,
	MoTaHH varchar(200),
	CONSTRAINT fk_NhomHangHoa FOREIGN KEY (MaNhom) REFERENCES NhomHangHoa(MaNhom)
	
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE NhanVien(
	MSNV char(5) PRIMARY KEY,
	HoTenNV varchar(50) not null,
	ChucVu varchar(50) not null,
	DiaChi varchar(50) ,
	SoDienThoai varchar(10) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE KhachHang(
	MSKH char(5) PRIMARY KEY,
	HoTenKH varchar(50) not null,
	DiaChi varchar(50) not null ,
	SoDienThoai varchar(10) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;;



CREATE TABLE DatHang(
	SoDonDH char(5)	PRIMARY KEY,
	MSKH char(5) not null,
	MSNV char(5) not null ,
	NgayDH datetime not null,
	TrangThai varchar(10) not null,
	CONSTRAINT pk_KhachHang FOREIGN KEY (MSKH) REFERENCES KhachHang(MSKH),
	CONSTRAINT pk_NhanVien FOREIGN KEY (MSNV) REFERENCES NhanVien(MSNV)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;;

CREATE TABLE ChiTietDatHang(
	SoDonDH char(5) PRIMARY KEY,
	MSHH char(5) not null,
	SoLuong tinyint not null,
	GiaDatHang real,
	CONSTRAINT pk_HangHoa FOREIGN KEY (MSHH) REFERENCES HangHoa(MSHH),
	CONSTRAINT pk_DatHang FOREIGN KEY (SoDonDH) REFERENCES DatHang(SoDonDH)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;;


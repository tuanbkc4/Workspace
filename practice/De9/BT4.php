SELECT Ten_KhachHang,NgayDat FROM orderlist WHERE TrangThai=1;

SELECT Ten_KhachHang FROM orderlist WHERE Ten_KhachHang LIKE '% Anh' ;

UPDATE orderlist SET Ten_KhachHang = 'Nguyễn Hoàng Ánh' WHERE Ten_KhachHang LIKE 'Nguyễn Hoàng Anh';
UPDATE orderlist SET Ten_KhachHang = 'Nguyễn Tuấn Ánh' WHERE Ten_KhachHang LIKE 'Nguyễn Tuấn Anh';
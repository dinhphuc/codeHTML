CREATE DATABASE QuanLyPhongMay
GO
USE QuanLyPhongMay
GO
CREATE TABLE lop(
	malop CHAR(10) PRIMARY KEY

)
CREATE TABLE GiaoVien
    (
      MaGV CHAR(10) PRIMARY KEY ,
      HoTenGV NVARCHAR(50) ,
      NgaySinhGV DATE ,
      GioiTinh CHAR(3) ,
      Luong BIGINT ,
      DiaChi NVARCHAR(50) ,
      CONSTRAINT GV_GT_CHECK CHECK ( GioiTinh IN ( 'Nam', N'Nu' ) )
    )
GO
CREATE TABLE PhongMay
    (
      MaPM CHAR(10) PRIMARY KEY ,
      TenPM NVARCHAR(50) ,
      DiaDiemPM NVARCHAR(50) ,
      MaNQL CHAR(10) ,
      CONSTRAINT PM_MaNQL_FK FOREIGN KEY ( MaNQL ) REFERENCES GiaoVien ( MaGV )
    )
GO

CREATE TABLE Chitietlictruc(
	MaLichTruc CHAR(10) PRIMARY KEY,
	MaGV CHAR(10) FOREIGN KEY REFERENCES dbo.GiaoVien(MaGV),
	Malop CHAR(10) FOREIGN KEY REFERENCES dbo.lop(malop)
)
GO

CREATE TABLE Truc_PM_GV
    (
      MaGV CHAR(10) ,
      MaPM CHAR(10) ,
      SoGio FLOAT ,
      CONSTRAINT Truc_PM_GV_PK PRIMARY KEY ( MaGV, MaPM ) ,
      CONSTRAINT Truc_MaGV_FK FOREIGN KEY ( MaGV ) REFERENCES GiaoVien ( MaGV ) ,
      CONSTRAINT Truc_MaPM_FK FOREIGN KEY ( MaPM ) REFERENCES PhongMay ( MaPM ),
	  MaLichTruc CHAR(10) FOREIGN KEY REFERENCES dbo.Chitietlictruc(MaLichTruc)
    )
GO

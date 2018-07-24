<?php
	/* creating connection */
	$username="root";
	$password="";
	$server="localhost";
	$con=mysqli_connect($server, $username, $password);

	/* creating database */
	mysqli_query($con, "create database if not exists Island_Dreams");
	mysqli_query($con, "use Island_Dreams");
	
	/* creating tables */
	if($result=mysqli_query($con, "show tables like 'user'")){
		if(mysqli_num_rows($result)==0){
			mysqli_query($con, "create table user(UserId int AUTO_INCREMENT PRIMARY KEY, UserName varchar(30), UserEmail varchar(30), Password varchar(100), PassportNo varchar(9), RegDate datetime, Role varchar(5))");
			mysqli_query($con, "alter table user add primary key(UserId, UserEmail)");
			
			/* add admins */
			mysqli_query($con, "insert into user(UserName,UserEmail,Password,PassportNo,RegDate,Role) values('admin','admin@live.com',md5('admin'),'',NOW(),'admin')");
			mysqli_query($con, "insert into user(UserName,UserEmail,Password,PassportNo,RegDate,Role) values('testuser','testuser@live.com',md5('testuser'),'',NOW(),'user')");
		}
	}
	if($result=mysqli_query($con, "show tables like 'hotel'")){
		if(mysqli_num_rows($result)==0){
			mysqli_query($con, "create table hotel(HotelId int PRIMARY KEY AUTO_INCREMENT, HotelName varchar(50), HotelLocation varchar(50), HotelPhoto varchar(100), HotelDescription varchar(500))");

			mysqli_query($con, "insert into hotel(HotelId, HotelName, HotelLocation, HotelPhoto, HotelDescription) values(101,'Chaaya Tranz Hotel, Hikkaduwa','Galle','images/hotels/galle/ChaayaTranzHikkaduwa.jpg','4-stars, available')");
			mysqli_query($con, "insert into hotel(HotelName, HotelLocation, HotelPhoto, HotelDescription) values('Kabalana Beach Hotel','Galle','images/hotels/galle/KabalanaHotel.jpg','3-stars, available')");
			mysqli_query($con, "insert into hotel(HotelName, HotelLocation, HotelPhoto, HotelDescription) values('Koggala Beach Hotel','Galle','images/hotels/galle/KoggalaBeachHotel.jpg','2-stars, available')");
			mysqli_query($con, "insert into hotel(HotelName, HotelLocation, HotelPhoto, HotelDescription) values('Lady Hill Hotel, Galle','Galle','images/hotels/galle/LadyHillGalle.jpg','2-stars, available')");
			mysqli_query($con, "insert into hotel(HotelName, HotelLocation, HotelPhoto, HotelDescription) values('Sanmira Renaissance, Unawatuna','Galle','images/hotels/galle/SanmiraRenaissanceUnawatuna.jpg','4-stars, available')");
			
			mysqli_query($con, "insert into hotel(HotelName, HotelLocation, HotelPhoto, HotelDescription) values('Galway Forest Lodge','NuwaraEliya','images/hotels/nuwaraeliya/GalwayForestLodge.jpg','3-stars, available')");
			mysqli_query($con, "insert into hotel(HotelName, HotelLocation, HotelPhoto, HotelDescription) values('Glendower Hotel','NuwaraEliya','images/hotels/nuwaraeliya/GlendowerHotel.jpg','2-stars, available')");
			mysqli_query($con, "insert into hotel(HotelName, HotelLocation, HotelPhoto, HotelDescription) values('St. Andrews Hotel','NuwaraEliya','images/hotels/nuwaraeliya/StAndrewsHotel.jpg','3-stars, available')");
			mysqli_query($con, "insert into hotel(HotelName, HotelLocation, HotelPhoto, HotelDescription) values('Hotel Sunhill','NuwaraEliya','images/hotels/nuwaraeliya/SunhillHotel.jpg','2-stars, available')");
			mysqli_query($con, "insert into hotel(HotelName, HotelLocation, HotelPhoto, HotelDescription) values('Windsor Hotel','NuwaraEliya','images/hotels/nuwaraeliya/WindsorHotel.jpg','2-stars, available')");
		}
	}
	if($result=mysqli_query($con, "show tables like 'room'")){
		if(mysqli_num_rows($result)==0){
			mysqli_query($con, "create table room(HotelId int, RoomNo int, Size varchar(10), Availablity int, FOREIGN KEY(HotelId) REFERENCES hotel(HotelId) ON DELETE CASCADE)");
			mysqli_query($con, "alter table room add primary key(HotelId, RoomNo)");
		}
	}
	if($result=mysqli_query($con, "show tables like 'room_buyer'")){
		if(mysqli_num_rows($result)==0){
			mysqli_query($con, "create table room_buyer(UserId int, HotelId int, RoomNo int, ArrivalDate varchar(10), DepartureDate varchar(10))");
		}
	}
	if($result=mysqli_query($con, "show tables like 'vehicle'")){
		if(mysqli_num_rows($result)==0){
			mysqli_query($con, "create table vehicle(VehicleNo int PRIMARY KEY AUTO_INCREMENT, VehicleType varchar(20), VehicleLocation varchar(50), Availablity int, VehiclePhoto varchar(100))");
			
			mysqli_query($con, "insert into vehicle values(101,'Van','Rathnapura',1,'images/vehicles/rathnapura/(1).jpg')");
			mysqli_query($con, "insert into vehicle values(102,'Motor Bike','Rathnapura',1,'images/vehicles/rathnapura/(2).jpg')");
			mysqli_query($con, "insert into vehicle values(103,'Safari Jeep','Rathnapura',1,'images/vehicles/rathnapura/(3).jpg')");
			mysqli_query($con, "insert into vehicle values(104,'Cycles','Rathnapura',1,'images/vehicles/rathnapura/(4).jpg')");
		}
	}
	if($result=mysqli_query($con, "show tables like 'vehicle_buyer'")){
		if(mysqli_num_rows($result)==0){
			mysqli_query($con, "create table vehicle_buyer(UserId int, VehicleNo int, BoughtDate varchar(10), UsedDays int)");
		}
	}
?>

Create table Cars(
id int primary key AUTO_INCREMENT,
producer varchar(20),
type varchar(30),
vintage int ,
fuel varchar(10)
);
INSERT INTO `cars` (`id`, `producer`, `type`, `vintage`, `fuel`) VALUES 
(NULL, 'Opel', 'Corsa', '2000', 'benzin'), 
(NULL, 'Bmw', 'i8', '2018', 'benzin'), 
(NULL, 'Audi', 'a6', '2001', 'dízel'), 
(NULL, 'Alfa romeo', '147', '2006', 'benzin'), 
(NULL, 'Bmw', 'x5', '2019', 'dízel'),
(NULL, 'Mercedes', 'AMG GT S', '2017', 'benzin'),
(NULL, 'Suzuki', 'Swift', '2005', 'dízel');

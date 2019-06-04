USE `support my day`;
--                                                                                           All Data for the first table of the database

-- 6.1.2019 deze is helemaal goed na aanpassing van de INT naar varchar in de DDL. Laad zonder fouten
INSERT INTO `Organisations` (`Organisation_ID`,`Name`,`Vat_Number`,`CoC_Number`,`IBAN`,`Telephone_Number`,`Email`,`Contact_Person`) VALUES
(1,"ID&T","33630546299","077760-2020","555 29716 01276 135","8607-7-79-20-19-29","nunc.risus.varius@necante.net","Summer"),
(2,"XSENSE","05603820199","882934-9151","547 03089 90055 250","3172-7-57-20-27-83","Nunc.commodo.auctor@egettincidunt.com","Lars"),
(3,"JV-events","23739174599","435501-3311","532 75206 30209 270","7762-9-43-38-53-55","auctor.velit.eget@et.edu","Timon"),
(4,"UDC Events","00580634599","457679-9227","527 32396 90461 010","4638-2-86-36-59-82","risus@Phasellus.net","Herrod"),
(5,"Mojo Concerts","98954538799","169627-3216","521 28214 44704 227","4741-9-46-26-21-57","dui@Donec.ca","Riley"),
(6,"Apenkooi Events","17606265199","447396-3777","529 42922 87758 731","1747-6-79-59-91-94","Nullam.scelerisque.neque@nascetur.org","Geraldine"),
(7,"MTD Nederland","84547823699","512024-4180","521 48097 28197 430","8121-7-24-74-93-78","Nullam.velit.dui@volutpatornarefacilisis.co.uk","Rebekah"),
(8,"MadNes","66387705899","052415-7716","559 51021 45710 343","1505-6-93-49-88-13","gravida.non.sollicitudin@risus.co.uk","Grant"),
(9,"Festipi","71858220099","325497-0621","512 39338 10261 084","6261-1-23-82-88-68","quis@tempusscelerisquelorem.ca","Suki"),
(10,"Oerol","63790280399","025104-8807","549 33383 10016 826","8246-9-17-48-21-83","ligula.elit.pretium@metusAliquam.com","Jana");


--                                                                                           All Data for the first table of the database

-- 6.1.2019 datum notatie gecorrigeerd naar 0000-00-00 ipv 00/00/0000
-- 6.1.2019 price truncation opgelost 71.25 werd geladen als 71. Oplossing: in DDL Decimal veranderen naar Decimal (5,2). Hier in de DML staat de price goed.
-- 6.1.2019 laad zonder fouten. restpunt is dat start en end date niet chronologisch is
INSERT INTO Festivals (Organisation_ID,Festival_ID,Name,Genre,Start_Date,End_Date,Capacity,Score,Price) VALUES (1,1,'Extrema Outdoor','Reggae','2019-11-17','2019-12-18',50947,3,0.5);
INSERT INTO Festivals (Organisation_ID,Festival_ID,Name,Genre,Start_Date,End_Date,Capacity,Score,Price) VALUES (2,2,'Boothstock','Jazz','2019-04-27','2019-01-04',46574,2,1.6);
INSERT INTO Festivals (Organisation_ID,Festival_ID,Name,Genre,Start_Date,End_Date,Capacity,Score,Price) VALUES (3,3,'Amsterdam Open Air','Jazz','2019-06-17','2019-05-17',61405,7,2.7);
INSERT INTO Festivals (Organisation_ID,Festival_ID,Name,Genre,Start_Date,End_Date,Capacity,Score,Price) VALUES (4,4,'Mistery Land','Reggae','2018-03-26','2018-09-22',98066,7,3.8);
INSERT INTO Festivals (Organisation_ID,Festival_ID,Name,Genre,Start_Date,End_Date,Capacity,Score,Price) VALUES (5,5,'Lowlands','Reggae','2019-01-05','2018-08-07',1380,6,4.9);
INSERT INTO Festivals (Organisation_ID,Festival_ID,Name,Genre,Start_Date,End_Date,Capacity,Score,Price) VALUES (6,6,'North Sea Jazz','Reggae','2019-01-20','2018-02-14',4564,1,6);
INSERT INTO Festivals (Organisation_ID,Festival_ID,Name,Genre,Start_Date,End_Date,Capacity,Score,Price) VALUES (7,7,'Defqon.1','Reggae','2019-04-12','2018-08-18',59042,4,7.1);
INSERT INTO Festivals (Organisation_ID,Festival_ID,Name,Genre,Start_Date,End_Date,Capacity,Score,Price) VALUES (8,8,'WooHah','Reggae','2018-10-01','2019-03-26',44821,4,8.2);
INSERT INTO Festivals (Organisation_ID,Festival_ID,Name,Genre,Start_Date,End_Date,Capacity,Score,Price) VALUES (9,9,'Parkpop','House','2018-12-05','2019-06-10',93855,3,9.3);
INSERT INTO Festivals (Organisation_ID,Festival_ID,Name,Genre,Start_Date,End_Date,Capacity,Score,Price) VALUES (10,10,'Wireless Festival','Jazz','2019-03-18','2018-11-26',32807,3,10.4);
INSERT INTO Festivals (Organisation_ID,Festival_ID,Name,Genre,Start_Date,End_Date,Capacity,Score,Price) VALUES (11,11,'Breda Live','Jazz','2018-08-10','2018-04-16',41902,4,11.5);
INSERT INTO Festivals (Organisation_ID,Festival_ID,Name,Genre,Start_Date,End_Date,Capacity,Score,Price) VALUES (12,12,'By The Creek Festival','Reggae','2018-07-17','2019-04-01',60747,9,12.6);


--                                                                                           All Data for the first table of the database


INSERT INTO `stages` (`Stage_ID`, `Festival_ID`, `Location`, `Capacity`) VALUES
(1, 0, 'SJ', 2191),
(2, 0, 'C', 1120),
(3, 0, 'MG', 2591),
(4, 0, 'Western Australia', 2558),
(5, 0, 'Kansas', 2898),
(6, 0, 'Victoria', 2519),
(7, 0, 'Noord Holland', 1744),
(8, 0, 'Hertfordshire', 2428),
(9, 0, 'Wie', 1557),
(10, 0, 'GA', 1880),
(11, 0, 'Victoria', 2265),
(12, 0, 'Ontario', 1878),
(13, 0, 'MI', 1020),
(14, 0, 'South Island', 1406),
(15, 0, 'Vienna', 1617),
(16, 0, 'Hamburg', 2859),
(17, 0, 'Uttar Pradesh', 2101),
(18, 0, 'WA', 1414),
(19, 0, 'Victoria', 2821),
(20, 0, 'Florida', 2072),
(21, 0, '?ódzkie', 1916),
(22, 0, 'IN', 1997),
(23, 0, 'Wie', 1618),
(24, 0, 'HI', 2764),
(25, 0, 'WA', 2935),
(26, 0, 'NI', 1461),
(27, 0, 'OR', 1616),
(28, 0, 'Louisiana', 2646),
(29, 0, 'Campania', 1985),
(30, 0, 'Maine', 1123),
(31, 0, 'Vienna', 2596),
(32, 0, 'Vienna', 1601),
(33, 0, 'Andhra Pradesh', 2837),
(34, 0, 'L', 1517),
(35, 0, 'Lazio', 1746),
(36, 0, 'Queensland', 2428),
(37, 0, 'WB', 2263),
(38, 0, 'NO', 2139),
(39, 0, 'Alabama', 2949),
(40, 0, 'FC', 1760),
(41, 0, 'Gaz', 2752),
(42, 0, 'HE', 1440),
(43, 0, 'Uttar Pradesh', 2421),
(44, 0, 'Andalucía', 1919),
(45, 0, 'Bavaria', 2211),
(46, 0, 'WP', 2369),
(47, 0, 'BE', 1242),
(48, 0, 'Rajasthan', 2271),
(49, 0, 'NSW', 2567),
(50, 0, 'Hatay', 1490),
(51, 0, 'Manitoba', 2506),
(52, 0, 'Zeeland', 1486),
(53, 0, 'ON', 2667),
(54, 0, 'Saarland', 1153),
(55, 0, 'Diy', 2798),
(56, 0, 'Kano', 2941),
(57, 0, 'Rio de Janeiro', 2023),
(58, 0, 'Hamburg', 1316),
(59, 0, 'LO', 2645),
(60, 0, 'Rajasthan', 1604),
(61, 0, 'North Island', 1270),
(62, 0, 'ON', 2306),
(63, 0, 'BO', 2919),
(64, 0, 'HH', 2438),
(65, 0, 'Sl?skie', 2832),
(66, 0, 'VIC', 2799),
(67, 0, 'Tamil Nadu', 1936),
(68, 0, 'SJ', 2515),
(69, 0, 'O', 2453),
(70, 0, 'Stockholms län', 2756),
(71, 0, 'Hesse', 1932),
(72, 0, 'Hamburg', 1629),
(73, 0, 'Colorado', 1870),
(74, 0, 'Hamburg', 1782),
(75, 0, 'Wie', 1169),
(76, 0, 'Vienna', 1335),
(77, 0, 'OV', 1906),
(78, 0, 'Dalarnas län', 1170),
(79, 0, 'Zeeland', 1100),
(80, 0, 'Swi?tokrzyskie', 1277),
(81, 0, 'North Island', 2154),
(82, 0, 'Ontario', 2964),
(83, 0, 'Hamburg', 2869),
(84, 0, 'VIC', 1355),
(85, 0, 'San José', 2415),
(86, 0, 'Emilia-Romagna', 2082),
(87, 0, 'Ontario', 2754),
(88, 0, 'Brussels Hoofdstedelijk Gewest', 2471),
(89, 0, 'Luik', 1388),
(90, 0, 'Munster', 1725),
(91, 0, 'CL', 1236),
(92, 0, 'Wie', 2584),
(93, 0, 'Louisiana', 1458),
(94, 0, 'IL', 2032),
(95, 0, 'Ist', 1648),
(96, 0, 'QC', 2029),
(97, 0, 'L', 1532),
(98, 0, 'MP', 2431),
(99, 0, 'New South Wales', 1341),
(100, 0, 'SAR', 1965);







--                                                                                           All Data for the first table of the database

-- 6.1.2019 goed geladen in tabel Facilities. 
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (71,1,"Drinks","-74.91772","137.67466",149);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (98,2,"Toilet","8.78775","-66.26633",423);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (93,3,"Toilet","-44.69727","-134.56282",762);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (89,4,"Food","-53.37937","-175.12889",883);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (93,5,"Food","70.5441","-139.7995",591);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (54,6,"Food","-64.06792","27.58266",85);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (77,7,"Drinks","-55.53304","-45.30791",85);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (57,8,"Drinks","-11.57133","135.25607",573);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (58,9,"Toilet","-6.03375","68.94289",266);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (21,10,"Food","6.30498","-36.41198",454);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (83,11,"Drinks","52.03431","-58.04026",304);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (48,12,"Drinks","-73.4307","71.34283",336);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (67,13,"Drinks","73.40071","-140.30821",163);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (20,14,"Toilet","-1.84423","-179.02041",773);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (63,15,"Food","25.39505","-71.05873",453);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (70,16,"Toilet","66.47745","91.56298",844);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (81,17,"Drinks","2.55386","-69.51491",106);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (88,18,"Toilet","82.03232","-135.33646",176);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (25,19,"Drinks","66.50772","-145.09153",853);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (21,20,"Drinks","-36.9131","-147.72483",532);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (40,21,"Drinks","-64.94066","99.38594",537);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (25,22,"Drinks","-0.22879","130.44915",394);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (87,23,"Food","69.88349","92.65634",350);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (73,24,"Drinks","8.37146","89.5083",395);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (93,25,"Drinks","33.66808","-9.67507",209);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (81,26,"Food","81.80202","82.20451",599);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (36,27,"Toilet","22.85414","78.35807",288);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (9,28,"Toilet","57.73181","86.7832",401);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (73,29,"Drinks","-26.0426","19.93916",4);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (47,30,"Toilet","70.92678","100.25985",330);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (75,31,"Food","-11.4536","123.9531",612);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (90,32,"Toilet","-76.20931","43.33614",149);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (89,33,"Drinks","2.6185","6.88117",842);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (53,34,"Toilet","11.03475","-41.48107",426);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (75,35,"Drinks","85.90356","87.99935",144);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (97,36,"Toilet","50.9886","168.27057",3);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (14,37,"Toilet","-51.58664","116.81145",959);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (74,38,"Food","-73.90528","18.8684",246);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (5,39,"Toilet","-31.77943","-85.40891",837);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (2,40,"Drinks","-29.00542","147.74968",594);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (65,41,"Drinks","8.34453","29.80635",379);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (33,42,"Food","-33.1306","36.89574",501);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (19,43,"Drinks","-67.9055","38.04025",495);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (50,44,"Food","31.76282","14.48501",570);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (80,45,"Toilet","56.70108","-91.73702",227);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (55,46,"Toilet","-71.55141","-137.52138",341);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (17,47,"Toilet","-29.21352","163.90222",400);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (30,48,"Food","-26.91858","-90.77965",438);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (24,49,"Toilet","-38.34879","108.70004",547);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (65,50,"Toilet","-42.42498","132.4054",802);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (59,51,"Drinks","46.41125","-67.15904",63);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (76,52,"Drinks","-43.35687","159.03272",520);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (6,53,"Toilet","52.92803","-23.58234",326);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (46,54,"Toilet","37.87357","-154.85709",45);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (19,55,"Drinks","38.3509","-120.02555",130);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (96,56,"Food","-88.20852","114.82049",356);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (28,57,"Food","-36.74656","161.27701",459);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (97,58,"Food","-9.0866","175.37064",987);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (32,59,"Drinks","82.49295","-87.80194",757);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (64,60,"Drinks","59.26387","109.18927",895);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (14,61,"Food","-30.6353","-101.93813",541);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (7,62,"Food","13.29747","73.79767",110);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (74,63,"Food","-7.55048","46.59459",369);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (2,64,"Toilet","36.18507","158.62397",769);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (62,65,"Toilet","5.05316","1.76216",868);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (30,66,"Toilet","-39.61247","-73.23271",940);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (94,67,"Drinks","20.22656","37.44519",812);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (15,68,"Food","78.50296","-98.20319",636);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (13,69,"Drinks","3.1179","121.5331",274);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (59,70,"Drinks","23.92998","-155.33866",537);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (25,71,"Drinks","71.77448","136.30723",953);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (52,72,"Food","13.13907","158.79559",720);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (73,73,"Food","-28.92361","160.27742",740);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (57,74,"Drinks","-20.94507","-104.42501",5);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (50,75,"Food","-33.6273","168.68502",144);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (80,76,"Drinks","-89.18466","-23.52684",275);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (6,77,"Toilet","30.73174","-43.09255",125);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (81,78,"Toilet","76.47207","-78.8923",441);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (40,79,"Toilet","-37.51351","-83.40128",513);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (27,80,"Drinks","-24.19084","-93.0332",136);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (70,81,"Food","80.82458","-103.93806",731);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (33,82,"Drinks","29.58541","-38.68476",115);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (88,83,"Toilet","-71.4044","151.56567",49);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (11,84,"Food","52.03884","-41.14487",760);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (40,85,"Drinks","-63.95602","-0.32318",469);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (10,86,"Food","6.22039","-30.84361",463);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (37,87,"Drinks","42.18922","108.20649",918);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (79,88,"Drinks","20.21922","-176.26857",461);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (18,89,"Drinks","-29.00729","105.76906",273);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (58,90,"Drinks","16.85227","113.55223",440);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (69,91,"Food","-26.34165","-76.25896",159);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (23,92,"Drinks","-5.28905","-59.53666",565);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (47,93,"Toilet","-18.74659","21.3814",579);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (64,94,"Drinks","63.49012","-56.20399",389);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (36,95,"Drinks","74.86235","-145.52478",742);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (19,96,"Toilet","-46.30208","116.1788",334);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (23,97,"Toilet","-15.69126","174.24025",347);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (44,98,"Drinks","-34.57421","14.64074",686);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (81,99,"Food","-84.57311","-107.88584",764);
INSERT INTO Facilities (Stage_ID,Facility_ID,Facility_Type,Latitude,Longitude,Capacity) VALUES (83,100,"Drinks","-74.15415","-62.26107",436);



--                                                                                           All Data for the first table of the database


INSERT INTO `Users` (`Screen_Name`,`First_Name`,`Last_Name`,`Email`) VALUES ("Conan Leonard","Tara","Buchanan","Suspendisse.tristique@inconsequatenim.org"),("Whoopi Washington","Gisela","Mooney","Morbi@etmagnisdis.org"),("Aquila Morales","Randall","Mills","tortor.at@vulputate.com"),("Benedict Snyder","Boris","Barlow","ac.mattis@gravidamolestiearcu.com"),("Anjolie Fernandez","Cassidy","Foreman","fermentum.arcu@pedemalesuadavel.ca"),("Lois Terry","Shad","Spencer","magnis@Quisquenonummyipsum.co.uk"),("Basia Middleton","Lewis","Hobbs","tellus.imperdiet.non@Seddiam.net"),("Grady Hicks","Cruz","Lopez","eu.erat.semper@dui.edu"),("Aurora Brennan","Ferris","Moses","vel@quamCurabiturvel.ca"),("Aubrey Andrews","Kasimir","Bowman","sodales.Mauris@est.com");
INSERT INTO `Users` (`Screen_Name`,`First_Name`,`Last_Name`,`Email`) VALUES ("Coby Jenkins","Otto","Mcguire","magnis@justo.net"),("Cassady West","Reece","Pennington","Phasellus.fermentum@magna.com"),("Dane Cabrera","Lillian","Fischer","mauris@nec.ca"),("Kiara Lowe","Winter","Goodman","Suspendisse@enim.co.uk"),("Dennis Britt","Eliana","Bryant","tempus.scelerisque.lorem@senectusetnetus.org"),("Beverly Torres","Thor","Bush","interdum@malesuada.ca"),("Illiana Rosa","Quynn","Becker","luctus.ipsum.leo@tellus.net"),("Jade Strong","Alden","Cooley","at@nequeNullamnisl.ca"),("Simone Bradley","Nasim","Baxter","cursus.vestibulum@eratvelpede.com"),("Sage Talley","Hall","Mckenzie","parturient@fermentumrisusat.com");
INSERT INTO `Users` (`Screen_Name`,`First_Name`,`Last_Name`,`Email`) VALUES ("Quon Salas","Dieter","Frost","felis.eget.varius@quispede.net"),("Lee Huffman","Daquan","Martinez","feugiat.metus@Cras.org"),("Noble Le","Desiree","Perry","magna.Cras@risus.org"),("Christopher Kirby","Anthony","Mccall","pede.et@justoPraesentluctus.edu"),("Jamalia Casey","Yuri","Padilla","ante@In.org"),("Janna Newton","Cora","Mcgowan","dictum.placerat@Praesent.co.uk"),("Levi Daugherty","Pamela","Romero","Mauris.vestibulum.neque@idmagnaet.ca"),("Kato Williamson","Akeem","Waters","ut.erat.Sed@parturientmontesnascetur.org"),("Cassady Foreman","Sonia","Reed","egestas@purusgravida.edu"),("Mari Bruce","Clark","Mckinney","feugiat.Sed@acipsumPhasellus.org");
INSERT INTO `Users` (`Screen_Name`,`First_Name`,`Last_Name`,`Email`) VALUES ("Yoshio Yang","Marny","Santiago","justo@Maecenas.ca"),("Dolan George","Nash","Daugherty","dolor.Fusce.mi@Vivamusmolestie.edu"),("Tanek Sweeney","Celeste","Yang","a@acmetus.co.uk"),("Ray Stone","Hu","Banks","Cum.sociis@elementum.com"),("Ezekiel Pollard","Alisa","Watkins","Nullam.velit.dui@pedeCrasvulputate.net"),("Jennifer Emerson","Katell","Rhodes","fringilla.cursus.purus@lacusQuisque.com"),("Dara Willis","Mannix","Randall","tincidunt@AeneanmassaInteger.org"),("Harlan Love","Hilda","Todd","Cum.sociis.natoque@estvitaesodales.net"),("Megan Price","Alexa","Olson","Praesent.interdum.ligula@commodo.ca"),("Whitney Terry","Elton","Collins","odio.Etiam@tortordictum.org");
INSERT INTO `Users` (`Screen_Name`,`First_Name`,`Last_Name`,`Email`) VALUES ("Finn Cobb","Knox","Cruz","eget.odio@velit.net"),("Hu Reilly","Ayanna","Blackburn","rhoncus.Donec.est@orcisem.co.uk"),("Charity Sherman","Chelsea","Levine","interdum.Sed@maurisblanditmattis.net"),("Elvis Bray","Dieter","Santiago","egestas.Sed.pharetra@Sed.com"),("Zephr Fox","Calvin","Meyer","convallis@nuncac.com"),("Rosalyn Slater","Belle","Schmidt","facilisis.Suspendisse@aliquet.edu"),("Ina Edwards","Flavia","Cantrell","ipsum.Donec@tristiquesenectus.edu"),("Abraham Kline","Celeste","Page","metus.Vivamus@dui.ca"),("Wang Patterson","Constance","Kirk","iaculis@velarcuCurabitur.ca"),("Callum Dillard","Leandra","Finch","mattis.Cras.eget@elitfermentumrisus.edu");
INSERT INTO `Users` (`Screen_Name`,`First_Name`,`Last_Name`,`Email`) VALUES ("Karen Cervantes","Sage","Gilliam","Fusce@torquentperconubia.ca"),("Wang Drake","Kibo","Barton","at.pretium@congueturpisIn.com"),("Thomas Benjamin","Aurora","Hinton","ut@Innecorci.edu"),("Jin Pierce","Daria","Hess","erat.Vivamus.nisi@Suspendissenonleo.edu"),("Ivy Thompson","Norman","Reid","ac.risus@amet.org"),("Camilla Robbins","Chester","Maynard","sapien@nonhendrerit.net"),("Joel Wyatt","Harrison","Wiggins","nec.enim@dictumultriciesligula.net"),("Leo Holder","Caesar","Riggs","lobortis.quis.pede@ipsum.org"),("Veda Wynn","Sloane","Alston","cursus.Integer@Fusce.com"),("Marshall Vargas","Allistair","Ward","ad.litora@ante.edu");
INSERT INTO `Users` (`Screen_Name`,`First_Name`,`Last_Name`,`Email`) VALUES ("Garrison Snow","Garrett","Wilkins","non.enim@magnaUt.co.uk"),("Plato Miller","Kennan","Wells","dictum.magna@etrutrumeu.net"),("Jermaine Ryan","Ferdinand","Moon","mattis.Cras@erat.edu"),("Maryam Harrell","Pamela","Rodgers","vitae.nibh.Donec@aliquetliberoInteger.org"),("Beatrice Vaughn","Riley","Mcdowell","ipsum.dolor.sit@Cumsociis.net"),("Edan Little","Pandora","Moss","arcu@velturpisAliquam.com"),("Mikayla Rollins","Raphael","Morse","posuere.at.velit@sapienCrasdolor.co.uk"),("Cameron Weber","Sylvester","Clark","vel.vulputate@uterat.org"),("Medge Oneal","Daryl","Cochran","accumsan@maurisInteger.co.uk"),("Grady Grant","Kameko","Love","vel.mauris@conubia.edu");
INSERT INTO `Users` (`Screen_Name`,`First_Name`,`Last_Name`,`Email`) VALUES ("Davis Glover","Luke","Mckinney","pede.malesuada@maurisidsapien.co.uk"),("Barrett Bolton","Oscar","Kirkland","et.risus@auctorvitaealiquet.org"),("Quentin Mathis","Porter","Melton","Quisque.ac.libero@placeratorci.ca"),("Porter Clements","Ava","Pollard","sociis.natoque.penatibus@porttitor.co.uk"),("Ebony Johnston","Keith","Moran","felis.eget@magnaCrasconvallis.edu"),("Yoshio Coffey","Stewart","Hammond","amet.risus.Donec@nonlaciniaat.com"),("Barrett Macdonald","Blythe","Potter","sem.egestas@nascetur.com"),("Armand Barker","Odessa","Burns","mi.lorem@metuseuerat.org"),("Melyssa Barrera","Marshall","Pacheco","Cras.vulputate.velit@auctor.com"),("Kaden Blake","Valentine","Benton","Aenean.sed.pede@justofaucibuslectus.edu");
INSERT INTO `Users` (`Screen_Name`,`First_Name`,`Last_Name`,`Email`) VALUES ("Neve Guerra","Drake","Lucas","arcu@musProinvel.com"),("Germaine Nieves","Shelly","Pratt","Sed.congue.elit@liberoettristique.net"),("Denise Lindsay","Yvette","Odonnell","feugiat@Etiamvestibulummassa.org"),("Victor Alston","Timon","Lynn","tellus.faucibus.leo@lectus.org"),("Amanda Greer","Acton","Carney","gravida.molestie.arcu@Donectempor.net"),("Athena Ellis","Quintessa","Livingston","fringilla.Donec.feugiat@utodiovel.com"),("Genevieve Dejesus","Hamish","Carr","vulputate.nisi.sem@Nunc.org"),("Hedley Mccarty","Cherokee","Chang","in.cursus@eu.net"),("Rinah Mathews","Denton","Dominguez","diam@aceleifend.ca"),("Adara Mcgowan","Jena","White","at@vulputate.net");
INSERT INTO `Users` (`Screen_Name`,`First_Name`,`Last_Name`,`Email`) VALUES ("Gisela Hebert","Kieran","Sloan","at.lacus.Quisque@In.org"),("Jasper Barrett","Mohammad","Clements","diam@dapibusidblandit.com"),("Maryam Travis","Hammett","Love","vitae.mauris@egetlacus.ca"),("Isabella Knight","Anastasia","Farmer","dolor.sit@ante.co.uk"),("Meredith Moreno","Beverly","Villarreal","Lorem.ipsum@purus.ca"),("Unity Mckay","Dahlia","Henry","imperdiet.dictum@congue.co.uk"),("Ria Johnston","Jerome","Hinton","at@estacfacilisis.ca"),("Clio Barnett","Kirby","Cooley","a@nisisemsemper.net"),("Stephen Eaton","Ray","Cabrera","aliquam.eros.turpis@Quisque.org"),("Illiana Elliott","Garrison","Mejia","penatibus@tristique.ca");








--                                                                                           All Data for the first table of the database


INSERT INTO `Wallets` (`IBAN`,`Payment_Option`,`Amount`) VALUES ("551 55135 78266 677","PayPal","€0,102"),("515 74030 50432 729","Ideal","€0,094"),("548 76245 01260 861","PayPal","€0,113"),("510 65223 13427 440","PayPal","€0,116"),("551 52394 98257 642","Ideal","€0,265"),("544 09923 87027 290","Credit Card","€0,222"),("539 48327 29000 892","Ideal","€0,237"),("547 38060 32049 873","Credit Card","€0,064"),("523 78784 23264 525","PayPal","€0,257"),("521 00231 23806 652","PayPal","€0,204");
INSERT INTO `Wallets` (`IBAN`,`Payment_Option`,`Amount`) VALUES ("557 59189 51626 198","PayPal","€0,089"),("513 20374 78202 700","Ideal","€0,264"),("556 78282 00598 116","PayPal","€0,198"),("542 94571 51481 110","PayPal","€0,104"),("554 52550 11926 756","PayPal","€0,079"),("510 13350 48348 889","PayPal","€0,221"),("514 93496 50965 967","PayPal","€0,004"),("550 40253 74197 009","PayPal","€0,003"),("523 64915 58690 836","Credit Card","€0,193"),("554 96231 14237 148","PayPal","€0,280");
INSERT INTO `Wallets` (`IBAN`,`Payment_Option`,`Amount`) VALUES ("547 02460 30377 377","Ideal","€0,253"),("559 29975 61784 810","Ideal","€0,263"),("530 31520 85138 396","Ideal","€0,129"),("524 11421 74626 679","PayPal","€0,256"),("532 00798 36785 796","Ideal","€0,141"),("547 46767 90243 490","Credit Card","€0,143"),("545 05802 31708 392","PayPal","€0,267"),("551 30497 24377 425","Ideal","€0,229"),("521 43578 95457 641","Credit Card","€0,068"),("521 01710 00878 979","Ideal","€0,091");
INSERT INTO `Wallets` (`IBAN`,`Payment_Option`,`Amount`) VALUES ("552 59046 74727 365","PayPal","€0,273"),("518 15270 73351 662","Credit Card","€0,148"),("541 83867 67181 165","Credit Card","€0,005"),("522 36484 55631 925","PayPal","€0,088"),("557 56200 51203 668","Ideal","€0,260"),("558 46078 81205 533","Credit Card","€0,099"),("554 06144 20880 720","Ideal","€0,268"),("537 48655 07978 701","Credit Card","€0,158"),("550 66336 20950 713","Credit Card","€0,240"),("533 63540 16433 513","Credit Card","€0,293");
INSERT INTO `Wallets` (`IBAN`,`Payment_Option`,`Amount`) VALUES ("549 24478 09928 929","Ideal","€0,021"),("527 12852 45861 172","PayPal","€0,058"),("552 00352 33314 398","Ideal","€0,162"),("541 27835 29796 221","PayPal","€0,183"),("513 19302 91153 558","Ideal","€0,255"),("554 76397 17926 376","Ideal","€0,266"),("558 86823 40744 154","PayPal","€0,296"),("552 77926 30173 016","Credit Card","€0,221"),("510 89913 21259 376","PayPal","€0,109"),("513 38882 26134 788","PayPal","€0,004");
INSERT INTO `Wallets` (`IBAN`,`Payment_Option`,`Amount`) VALUES ("552 64813 49608 923","Ideal","€0,120"),("519 69954 02587 715","PayPal","€0,266"),("512 46347 99953 472","Ideal","€0,073"),("557 11844 44668 099","Credit Card","€0,010"),("534 15311 22510 994","Ideal","€0,143"),("510 19997 54031 680","Ideal","€0,285"),("520 95334 61420 984","PayPal","€0,257"),("535 62113 21621 031","Ideal","€0,194"),("553 67674 04703 973","Ideal","€0,114"),("515 80540 72117 423","Credit Card","€0,200");
INSERT INTO `Wallets` (`IBAN`,`Payment_Option`,`Amount`) VALUES ("533 49857 02782 077","PayPal","€0,028"),("534 78394 94284 047","PayPal","€0,094"),("556 21700 89561 013","Ideal","€0,129"),("514 40996 72398 664","Ideal","€0,159"),("516 63727 27074 165","Credit Card","€0,228"),("514 37779 97583 190","Ideal","€0,216"),("544 48330 10606 074","PayPal","€0,258"),("535 38611 61475 600","PayPal","€0,251"),("533 96701 41974 676","PayPal","€0,138"),("513 27672 85296 582","PayPal","€0,153");
INSERT INTO `Wallets` (`IBAN`,`Payment_Option`,`Amount`) VALUES ("543 61009 22150 330","Ideal","€0,217"),("523 12307 79463 580","Ideal","€0,033"),("546 41832 15102 833","PayPal","€0,048"),("513 23970 64611 080","PayPal","€0,175"),("517 08904 61956 903","Credit Card","€0,281"),("550 90124 25303 146","PayPal","€0,262"),("526 53956 83790 029","PayPal","€0,181"),("514 08186 02229 143","Credit Card","€0,120"),("553 60900 08587 084","Credit Card","€0,197"),("543 35621 35223 589","PayPal","€0,063");
INSERT INTO `Wallets` (`IBAN`,`Payment_Option`,`Amount`) VALUES ("511 09407 21702 358","PayPal","€0,050"),("552 87220 65577 588","Ideal","€0,006"),("542 98996 06713 789","Ideal","€0,053"),("541 95690 68561 495","Ideal","€0,230"),("524 52631 65094 895","Ideal","€0,119"),("533 47817 52535 949","PayPal","€0,199"),("545 15511 62267 988","Ideal","€0,101"),("555 31465 37833 767","PayPal","€0,194"),("536 56392 92085 878","Credit Card","€0,071"),("525 64587 80215 919","PayPal","€0,291");
INSERT INTO `Wallets` (`IBAN`,`Payment_Option`,`Amount`) VALUES ("555 67514 10095 728","Ideal","€0,147"),("547 19830 07490 135","Credit Card","€0,103"),("552 61624 93493 029","Credit Card","€0,040"),("536 09002 54046 679","Credit Card","€0,029"),("520 68286 08293 507","PayPal","€0,125"),("552 06513 50285 367","PayPal","€0,063"),("542 68277 19507 254","Credit Card","€0,023"),("521 93750 82163 207","PayPal","€0,140"),("536 71741 85615 167","Ideal","€0,070"),("553 36243 77659 679","Credit Card","€0,135");








--                                                                                           All Data for the first table of the database


INSERT INTO `UserLocations` (`User_Location_ID`,`Location`,`Time`) VALUES (1,"-71.82316, 51.35606","09:03:31"),(2,"-4.53115, 85.68494","01:23:40"),(3,"32.45958, -158.12919","02:29:29"),(4,"-57.01578, -42.30366","13:56:37"),(5,"-61.16034, 35.45331","23:17:56"),(6,"-52.85493, -82.13668","06:35:21"),(7,"-84.32936, 163.79894","10:53:46"),(8,"41.74568, 36.85217","21:27:53"),(9,"3.75854, 153.32315","07:14:30"),(10,"38.26034, 81.44761","03:10:16");
INSERT INTO `UserLocations` (`User_Location_ID`,`Location`,`Time`) VALUES (11,"17.37956, -46.50341","13:43:36"),(12,"-56.12518, 26.84615","01:40:58"),(13,"85.87129, 45.46409","11:05:46"),(14,"66.39798, 17.33833","20:52:57"),(15,"-64.96719, -164.94821","13:54:52"),(16,"-12.69939, -150.46927","06:47:54"),(17,"39.50549, -112.37036","06:24:42"),(18,"-27.85489, -148.1117","23:15:57"),(19,"-71.89282, -35.26743","20:33:39"),(20,"14.71588, 1.94264","08:35:23");
INSERT INTO `UserLocations` (`User_Location_ID`,`Location`,`Time`) VALUES (21,"82.3219, -120.08811","01:12:52"),(22,"31.28141, -89.87896","17:25:09"),(23,"-65.65687, 113.31357","09:27:47"),(24,"-27.41587, 59.31237","02:55:31"),(25,"-81.62959, 115.99229","22:09:40"),(26,"73.36516, 100.61772","01:43:32"),(27,"-18.41062, 19.58786","13:04:25"),(28,"-41.27589, -173.14273","18:38:34"),(29,"57.36917, 77.85732","17:37:57"),(30,"2.08046, -84.62889","10:17:50");
INSERT INTO `UserLocations` (`User_Location_ID`,`Location`,`Time`) VALUES (31,"-35.30912, 174.32386","15:41:55"),(32,"35.48875, 73.94406","19:33:59"),(33,"-65.47553, -18.0932","02:39:17"),(34,"-86.76703, -73.34969","16:15:17"),(35,"15.2954, -166.07656","23:58:55"),(36,"48.54338, 13.56476","04:57:17"),(37,"86.27909, 72.06908","18:28:10"),(38,"4.69024, -167.10597","18:11:29"),(39,"-87.86265, -107.66867","20:35:49"),(40,"-67.00952, 98.71833","15:54:40");
INSERT INTO `UserLocations` (`User_Location_ID`,`Location`,`Time`) VALUES (41,"89.19194, -170.19654","03:58:09"),(42,"-74.76264, 89.06985","08:46:48"),(43,"39.18553, -96.63617","15:55:23"),(44,"-24.89148, 51.46293","03:44:24"),(45,"74.58376, -107.21117","08:08:31"),(46,"-2.41434, 171.65528","03:17:27"),(47,"38.6769, -55.9463","05:44:47"),(48,"81.29895, 106.50955","06:46:35"),(49,"-48.52374, 62.83956","17:08:25"),(50,"2.78015, 73.19499","11:47:48");
INSERT INTO `UserLocations` (`User_Location_ID`,`Location`,`Time`) VALUES (51,"-63.7158, 63.53029","15:29:10"),(52,"33.4026, 139.40952","18:44:18"),(53,"87.97064, -78.46415","06:53:53"),(54,"-82.92128, -58.45484","06:41:38"),(55,"77.42491, -100.51558","21:32:30"),(56,"81.96815, -140.72528","01:18:51"),(57,"85.06372, -25.47313","18:08:28"),(58,"-12.64888, 114.78983","23:44:50"),(59,"30.88832, 4.5728","15:47:57"),(60,"-56.76394, 111.55884","16:32:30");
INSERT INTO `UserLocations` (`User_Location_ID`,`Location`,`Time`) VALUES (61,"36.12521, -161.94405","16:57:35"),(62,"-57.14288, 70.77124","20:12:52"),(63,"8.30761, 13.24776","08:03:58"),(64,"-70.15198, 97.65754","21:25:49"),(65,"9.06531, 134.62772","07:47:30"),(66,"-72.43677, -160.38299","00:59:43"),(67,"-56.75091, 153.51962","22:10:34"),(68,"-75.30879, -97.14771","20:26:29"),(69,"21.20733, 147.01966","18:56:15"),(70,"87.68087, 92.04893","05:27:47");
INSERT INTO `UserLocations` (`User_Location_ID`,`Location`,`Time`) VALUES (71,"40.9676, 19.3376","08:19:25"),(72,"-5.09587, 9.43531","04:43:22"),(73,"11.61417, 75.39505","07:00:44"),(74,"38.24362, 128.21876","14:34:55"),(75,"36.78, 28.95973","16:34:08"),(76,"-28.90795, 114.27278","02:04:30"),(77,"55.10692, 2.19308","10:04:18"),(78,"40.31325, -154.86371","18:17:44"),(79,"-9.53899, 112.60538","18:38:26"),(80,"-38.29684, -172.21273","19:38:55");
INSERT INTO `UserLocations` (`User_Location_ID`,`Location`,`Time`) VALUES (81,"86.75721, -131.09565","04:53:07"),(82,"-48.46221, 72.00391","18:22:10"),(83,"-58.59917, -64.42428","05:31:22"),(84,"-6.44562, 46.62977","04:59:47"),(85,"-77.44403, 133.55739","04:03:48"),(86,"10.94824, 167.63395","13:28:11"),(87,"33.58247, 69.85316","09:31:12"),(88,"-41.44483, 71.04301","05:49:49"),(89,"-24.61391, -98.31339","00:41:49"),(90,"25.18805, -137.44307","06:38:32");
INSERT INTO `UserLocations` (`User_Location_ID`,`Location`,`Time`) VALUES (91,"-31.79002, -7.2411","02:47:56"),(92,"-55.31059, -154.01763","00:20:11"),(93,"-36.18286, -148.40183","19:23:48"),(94,"-12.28713, -46.41894","18:49:49"),(95,"-16.23563, -52.53104","02:43:26"),(96,"60.69442, 38.57331","14:39:01"),(97,"-68.5142, -30.42873","15:23:35"),(98,"-14.47579, -102.93252","00:57:40"),(99,"24.67913, -73.76522","16:03:29"),(100,"85.4974, 66.10687","21:28:35");








--                                                                                           All Data for the first table of the database


INSERT INTO `Artists` (`Artist_Name`,`Start_Time`,`End_Time`,`Location`) VALUES ("Crawford, Dale Y.","16:45","03:12","-36.61792, 80.75936"),("Avery, Macon U.","23:50","23:25","16.61084, -81.30331"),("Greer, Ginger C.","00:55","13:20","4.19968, -78.95866"),("Foster, Keane K.","22:05","20:37","42.53888, -173.26918"),("Sims, Uriah C.","06:37","19:23","61.02972, 9.98131"),("Porter, Joshua F.","01:11","00:08","-69.12191, 34.67243"),("Ward, Zachary I.","07:27","02:26","-56.52105, -62.25707"),("Hensley, Vernon Y.","12:09","12:49","-68.68984, 6.62557"),("Acosta, Hyatt Y.","11:01","14:13","-57.04164, 25.35259"),("Padilla, Doris F.","06:40","17:10","47.36534, -65.75784");
INSERT INTO `Artists` (`Artist_Name`,`Start_Time`,`End_Time`,`Location`) VALUES ("Horne, Hyacinth C.","15:26","12:15","20.64519, -105.08645"),("Sharp, Connor H.","05:30","21:38","8.0463, 82.8895"),("Peterson, Vaughan Q.","22:34","07:47","65.9852, -134.11543"),("Manning, Eagan T.","13:43","05:56","60.37468, 5.12611"),("Shannon, Herrod V.","18:22","10:19","-69.53121, -150.43205"),("Booth, Kirsten V.","11:44","20:10","-22.00887, 10.99438"),("Adkins, Channing B.","10:03","14:02","63.92661, -72.33963"),("Daugherty, Barry N.","17:41","23:34","36.54699, -16.90505"),("Simmons, Ezra K.","07:51","16:45","-76.41896, -34.07307"),("Duffy, Zachary Z.","18:38","23:42","9.33009, 156.29681");
INSERT INTO `Artists` (`Artist_Name`,`Start_Time`,`End_Time`,`Location`) VALUES ("Wilkerson, Ursula V.","18:06","17:06","45.77934, -21.16534"),("Eaton, Lionel H.","18:50","09:30","-42.23525, 161.4693"),("Hughes, Quinn V.","01:35","14:19","-52.81681, -2.52593"),("Fry, Miranda A.","10:21","07:26","-53.97558, 135.15765"),("Hewitt, Desiree B.","15:21","22:47","0.08554, 8.20968"),("Richard, Dahlia L.","07:07","16:59","54.27816, -77.67418"),("Compton, Iris A.","03:32","10:33","16.98012, 101.12385"),("Rowe, Burke L.","09:57","12:19","-85.47562, -53.09278"),("Donovan, Ella Q.","18:12","07:26","31.00424, -63.48144"),("Wynn, Brynn T.","02:18","20:56","81.67828, 30.62636");
INSERT INTO `Artists` (`Artist_Name`,`Start_Time`,`End_Time`,`Location`) VALUES ("Charles, Martina J.","02:01","09:42","-80.51325, 66.02002"),("Pena, Julie O.","02:05","16:32","84.69588, -28.84044"),("Valdez, Geoffrey O.","00:03","19:15","4.51074, -104.2575"),("Robbins, Ryan Q.","00:53","04:57","27.13649, -25.51904"),("Livingston, Bruce F.","20:45","02:12","-56.29428, -91.18381"),("Phelps, Camille Y.","05:27","16:39","6.56296, -2.8042"),("Faulkner, Lisandra E.","20:04","19:19","-18.07258, -101.61875"),("Hampton, Kameko R.","04:56","19:15","79.97132, 78.2706"),("Berry, Oleg I.","19:53","20:27","30.88947, -74.72839"),("Hess, Cameron E.","01:40","18:01","13.16332, 32.53337");
INSERT INTO `Artists` (`Artist_Name`,`Start_Time`,`End_Time`,`Location`) VALUES ("Campbell, Echo J.","06:55","19:08","40.0712, 123.97394"),("Allison, Dillon K.","14:55","13:29","-83.17086, -149.71863"),("Blevins, Galvin W.","18:41","14:39","-59.33374, -111.70606"),("Bowen, Clarke R.","22:18","22:29","16.55032, -73.32763"),("Strickland, Maxwell B.","08:35","18:51","76.47242, 44.12633"),("Frost, Camden I.","04:44","13:43","43.95493, 92.52334"),("Colon, Kenneth L.","17:58","10:04","2.90965, -37.77326"),("Coleman, Willa Q.","16:39","19:13","15.84122, 144.17922"),("Britt, Maile C.","21:15","00:41","60.25098, -24.0435"),("Rocha, Neil D.","03:15","07:15","41.24631, -21.56376");
INSERT INTO `Artists` (`Artist_Name`,`Start_Time`,`End_Time`,`Location`) VALUES ("Williams, Hakeem V.","01:05","15:55","-40.60085, 49.47978"),("Weeks, Farrah H.","08:53","04:47","-60.25739, -87.2966"),("Hendrix, Brianna A.","19:43","14:57","38.37449, -91.46583"),("Wright, Katell P.","19:08","05:04","-45.68651, -146.85296"),("Patterson, Stacy T.","03:36","03:07","66.07982, 159.57789"),("Branch, Serena P.","11:39","22:53","-59.91241, -117.65591"),("Burgess, Lysandra M.","10:26","17:45","1.52222, 16.79513"),("Doyle, Maris J.","17:13","15:13","7.39905, 89.54871"),("Sims, Francesca R.","15:13","04:33","-53.20031, -158.65775"),("Rocha, George K.","08:09","19:18","0.60241, -5.93995");
INSERT INTO `Artists` (`Artist_Name`,`Start_Time`,`End_Time`,`Location`) VALUES ("Zamora, Cecilia H.","07:30","04:06","-29.21693, 164.66"),("Wade, Kenyon F.","00:50","03:42","-2.09572, 32.10187"),("Humphrey, Hyatt K.","05:22","01:53","-8.94561, 16.09919"),("Day, Kay E.","12:04","05:16","-37.46581, -134.46245"),("Mckinney, Andrew R.","20:37","08:23","-34.08017, 49.45597"),("Gamble, Bianca X.","18:19","07:09","75.3443, 66.12518"),("Jenkins, Scarlett C.","10:30","20:08","-71.07889, -107.94116"),("Battle, Nasim I.","08:51","22:36","-62.75761, 170.4943"),("Hood, Jin B.","23:29","20:13","-20.88082, 165.72242"),("Armstrong, Winter R.","02:40","09:59","-17.07587, -106.79103");
INSERT INTO `Artists` (`Artist_Name`,`Start_Time`,`End_Time`,`Location`) VALUES ("Morris, Daquan V.","06:22","15:54","-61.09048, 31.13612"),("Parks, Orson Y.","03:59","06:59","-87.63701, 39.51298"),("Rogers, Seth R.","18:12","04:05","-76.92422, 78.86246"),("Mosley, Chase C.","02:43","08:08","-12.77606, 102.03626"),("Singleton, Yvette C.","03:30","22:29","5.2019, 25.91721"),("Lawrence, Amanda C.","04:24","05:07","-69.27917, -135.9935"),("Conner, Amela C.","11:32","07:26","-37.46464, 46.58483"),("Alvarado, Malik O.","21:30","01:29","-64.3557, -134.09767"),("Vazquez, Iola C.","01:24","10:11","65.59213, 105.08384"),("Delacruz, Macy R.","10:37","00:43","-37.29395, 18.13092");
INSERT INTO `Artists` (`Artist_Name`,`Start_Time`,`End_Time`,`Location`) VALUES ("Langley, Ignatius S.","07:09","15:27","1.50722, 145.33783"),("Fowler, Fletcher Y.","18:36","14:45","17.27838, 165.57536"),("Valencia, Kirestin C.","07:34","09:41","-31.10069, -154.31231"),("Calhoun, Fletcher E.","20:56","23:12","-38.02535, 81.8836"),("Langley, Carson T.","18:15","12:08","24.94023, 28.82038"),("Fitzgerald, Aretha E.","06:37","15:57","0.36875, 81.09891"),("Little, Brian I.","15:40","04:15","20.60047, 72.32701"),("Hinton, Kennan J.","13:38","22:14","30.72271, 79.11293"),("Boyer, Selma H.","18:42","04:46","7.40095, 38.16291"),("Fowler, Norman S.","07:06","09:34","-74.86404, -33.5897");
INSERT INTO `Artists` (`Artist_Name`,`Start_Time`,`End_Time`,`Location`) VALUES ("Logan, Blake R.","11:55","00:57","-36.83027, 2.34602"),("Williamson, Roary Y.","14:37","03:33","52.24109, -49.66278"),("Pratt, Eugenia V.","02:54","10:01","9.49642, 28.67663"),("Spears, Hall L.","15:36","19:27","51.50038, 173.02534"),("Willis, Xanthus R.","09:13","06:24","-62.5525, 123.05954"),("Medina, Pamela G.","03:35","11:58","-73.68515, 141.40478"),("Logan, Gregory I.","06:17","00:22","21.97368, 113.37877"),("Acosta, Alfonso D.","08:52","09:35","-88.29701, -84.2324"),("Chase, Kylee W.","07:02","09:35","-60.11268, -35.99837"),("Branch, Jerry H.","11:03","13:03","-59.94614, -71.86523");








--                                                                                           All Data for the first table of the database


INSERT INTO `Visits` (`Date`, `Festival_ID`, `Email`) VALUES ('1/17/2018', 1, 'dictum.placerat@Praesent.co.uk'), ('2/17/2018', 2, 'dictum.placerat@Praesent.co.uk');

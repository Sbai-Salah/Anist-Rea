--
-- Database: `anistrea`
--
CREATE DATABASE anistrea;
-- --------------------------------------------------------

--
-- Table structure for table `anesthesiste`
--

CREATE TABLE anistrea.anesthesiste (
  id_anesthesiste INT AUTO_INCREMENT,
  nom TEXT NOT NULL,
  prenom TEXT NOT NULL,
  sexe TEXT NOT NULL,
  CIN TEXT NOT NULL,
  email TEXT NOT NULL,
  telephone TEXT NOT NULL,
  hopital TEXT NOT NULL DEFAULT "",
  experience INT NOT NULL DEFAULT 0,
  password TEXT NOT NULL,
  adresse TEXT NOT NULL DEFAULT "",
  ville TEXT NOT NULL DEFAULT "",
  pays TEXT NOT NULL DEFAULT "",
  codePostal TEXT NOT NULL DEFAULT "",
  aboutMe TEXT NOT NULL DEFAULT "",
  PRIMARY KEY (id_anesthesiste)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anesthesiste`
-- 

INSERT INTO anistrea.anesthesiste(nom,prenom,sexe,email,telephone,password) VALUES
('GUEST','guest','male','GUESTguest@gmail.com','+212627115107','5f4dcc3b5aa765d61d8327deb882cf99'),
('ZEBBOUJ','khalid','male','ZEBBOUJkhalid@gmail.com','+212741958184','5f4dcc3b5aa765d61d8327deb882cf99'),
('MHAJIB','achraf','male','MHAJIBachraf@gmail.com','+212749384896','5f4dcc3b5aa765d61d8327deb882cf99'),
('DAHMANI','hamza','male','DAHMANIhamza@gmail.com','+212660661777','5f4dcc3b5aa765d61d8327deb882cf99'),
('BDAIDI','najwa','female','BDAIDInajwa@gmail.com','+212646524296','5f4dcc3b5aa765d61d8327deb882cf99'),
('AKRAD','wafae','female','AKRADwafae@gmail.com','+212799071389','5f4dcc3b5aa765d61d8327deb882cf99'),
('IDRISSI','fatima','female','IDRISSIfatima@gmail.com','+212713003160','5f4dcc3b5aa765d61d8327deb882cf99');
-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE anistrea.patient (
  id_patient  INT AUTO_INCREMENT,
  nom TEXT NOT NULL,
  prenom TEXT NOT NULL,
  CIN TEXT NOT NULL,
  DateNaissance DATE NOT NULL,
  age INT NOT NULL,
  sexe TEXT NOT NULL,
  situationFamiliale TEXT NOT NULL,
  email TEXT NOT NULL,
  telephone TEXT NOT NULL,
  adresseRue TEXT NOT NULL,
  ville TEXT NOT NULL,
  province TEXT NOT NULL,
  zipCode INT NOT NULL,
  etatReanimation TEXT NOT NULL,
  nomContact TEXT NOT NULL,
  prenomContact TEXT NOT NULL,
  telephoneContact TEXT NOT NULL,
  dateHospitalisation DATE NOT NULL,
  numeroDossier TEXT NOT NULL,
  progression INT NOT NULL,
  id_anesthesiste INT NOT NULL,
  PRIMARY KEY (id_patient),
  FOREIGN KEY (id_anesthesiste) REFERENCES anistrea.anesthesiste(id_anesthesiste)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `patient`
--

INSERT INTO anistrea.patient(nom,prenom,CIN,DateNaissance,age,sexe,situationFamiliale,email,telephone,adresseRue,ville,province,zipCode,etatReanimation,nomContact,prenomContact,telephoneContact,dateHospitalisation,numeroDossier,progression,id_anesthesiste) VALUES
 ('Lamnini','Soumia','KL208689','1998-4-13',24,'female','divorcé','LamniniSoumia@gmail.com','+212733107135','35','Casablanca','Meknès-Tafilalet',39682,'En Réanimation','LAMNINI','SOUMIA','+212683893987','2022-5-21','85279',10,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Kibabe','Mohammed','KL208689','1998-4-13',24,'female','divorcé','KibabeMohammed@gmail.com','+212733107135','35','Casablanca','Meknès-Tafilalet',39682,'En Réanimation','KIBABE','MOHAMMED','+212683893987','2022-5-21','85279',10,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Essarrar','Oualid','KL208689','1998-4-13',24,'male','divorcé','EssarrarOualid@gmail.com','+212733107135','35','Casablanca','Meknès-Tafilalet',39682,'En Réanimation','ESSARRAR','OUALID','+212683893987','2022-5-21','85279',10,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Salmi','Hatim','LF760402','1989-8-5',33,'male','Célibataire','SalmiHatim@gmail.com','+212684181255','73','Kenitra','Meknès-Tafilalet',54733,'En Réanimation','SALMI','HATIM','+212652413133','2022-5-20','79969',40,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Lablali','Oumayma','LF760402','1989-8-5',33,'male','Célibataire','LablaliOumayma@gmail.com','+212684181255','73','Kenitra','Meknès-Tafilalet',54733,'En Réanimation','LABLALI','OUMAYMA','+212652413133','2022-5-20','79969',40,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Ourahhou','Mohamed','LF760402','1989-8-5',33,'male','Célibataire','OurahhouMohamed@gmail.com','+212684181255','73','Kenitra','Meknès-Tafilalet',54733,'En Réanimation','OURAHHOU','MOHAMED','+212652413133','2022-5-20','79969',40,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Regabi','Hajar','LV589620','1962-1-9',60,'female','divorcé','RegabiHajar@gmail.com','+212629214670','17','Fes','Meknès-Tafilalet',35096,'Pré Chirurgie','REGABI','HAJAR','+212737114819','2022-5-19','24242',100,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Elqaddouri','Salma','UU169923','2018-8-10',4,'male','Célibataire','ElqaddouriSalma@gmail.com','+212710051194','88','Taza','Casablanca-Settat',26138,'Post Chirurgie','ELQADDOURI','SALMA','+212680556118','2022-5-18','94771',50,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Hachimi','Imane','CI350455','2016-9-15',6,'male','Célibataire','HachimiImane@gmail.com','+212696426504','66','Khouribga','Tanger-Tétouan-Al Hoceïma',65551,'Pré Chirurgie','HACHIMI','IMANE','+212638821938','2022-5-17','37244',80,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Raiss','Hajar','CI350455','2016-9-15',6,'female','Célibataire','RaissHajar@gmail.com','+212696426504','66','Khouribga','Tanger-Tétouan-Al Hoceïma',65551,'Pré Chirurgie','RAISS','HAJAR','+212638821938','2022-5-17','37244',80,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Lahsoussi','Chaimae','CI350455','2016-9-15',6,'male','Célibataire','LahsoussiChaimae@gmail.com','+212696426504','66','Khouribga','Tanger-Tétouan-Al Hoceïma',65551,'Pré Chirurgie','LAHSOUSSI','CHAIMAE','+212638821938','2022-5-17','37244',80,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Hadine','Imane','FX289751','1973-4-13',49,'female','Célibataire','HadineImane@gmail.com','+212779327019','20','Tétouan','Chaouia-Ouardigha',61927,'Post Chirurgie','HADINE','IMANE','+212766294953','2022-5-16','76918',70,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Ngadi','Tauil','GK264988','1983-1-11',39,'male','divorcé','NgadiTauil@gmail.com','+212752069886','29','Marrakech','Oriental',50177,'Pré Chirurgie','NGADI','TAUIL','+212738023143','2022-5-15','37043',50,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Bekkouch','Chahrazad','GK264988','1983-1-11',39,'male','divorcé','BekkouchChahrazad@gmail.com','+212752069886','29','Marrakech','Oriental',50177,'Pré Chirurgie','BEKKOUCH','Chahrazad','+212738023143','2022-5-15','37043',50,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Rafiq','Mohammed','GK264988','1983-1-11',39,'male','divorcé','RafiqMohammed@gmail.com','+212752069886','29','Marrakech','Oriental',50177,'Pré Chirurgie','RAFIQ','MOHAMMED','+212738023143','2022-5-15','37043',50,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Takhtoukh','Rime','EV629999','1971-1-18',51,'female','Célibataire','TakhtoukhRime@gmail.com','+212712586653','98','Tétouan','Fès-Boulemane',59506,'En Réanimation','TAKHTOUKH','RIME','+212731327146','2021-5-18','76526',100,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Miri','Khadija','AZ876340','1951-10-1',71,'female','Célibataire','MiriKhadija@gmail.com','+212695962155','25','Rabat','Oriental',30007,'Post Chirurgie','MIRI','KHADIJA','+212622484466','2021-4-20','10976',30,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Tanebdourte','Yassine','ZK245738','1990-10-17',32,'male','Marié','TanebdourteYassine@gmail.com','+212750214271','85','Sale','Fès-Boulemane',78938,'Pré Chirurgie','TANEBDOURTE','YASSINE','+212645709851','2021-9-4','57774',70,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Azouzoute','Yasmina','PL448575','1992-5-18',30,'male','Célibataire','AzouzouteYasmina@gmail.com','+212613712635','25','laayoune','Fès-Boulemane',59844,'Post Chirurgie','AZOUZOUTE','YASMINA','+212743452093','2022-4-14','21323',40,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Tikent','Souhayla','CB615583','1998-6-18',24,'female','Marié','TikentSouhayla@gmail.com','+212667175422','73','Taza','Fès-Boulemane',94938,'Pré Chirurgie','TIKENT','SOUHAYLA','+212663382143','2021-3-28','69319',30,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Montasser','Jawad','ZK772732','1970-7-7',52,'female','Célibataire','MontasserJawad@gmail.com','+212722984972','67','Kenitra','Casablanca-Settat',48082,'Post Chirurgie','MONTASSER','JAWAD','+212645315264','2022-3-13','26708',50,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Salmi','Ayoub','DA643907','2011-2-19',11,'male','Célibataire','SalmiAyoub@gmail.com','+212672385434','32','Berkane','Tanger-Tétouan-Al Hoceïma',47711,'Pré Chirurgie','SALMI','AYOUB','+212756084792','2022-4-1','74402',20,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Ezzaazaa','Soukaina','NY801165','1964-1-7',58,'male','Célibataire','EzzaazaaSoukaina@gmail.com','+212766285152','72','Meknès','Fès-Boulemane',64292,'En Réanimation','EZZAAZAA','SOUKAINA','+212722991121','2021-11-6','24653',20,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Fellaki','Mohamed','KP484461','1983-10-19',39,'male','Marié','FellakiMohamed@gmail.com','+212672178479','82','Safi','Meknès-Tafilalet',28562,'Post Chirurgie','FELLAKI','MOHAMED','+212754368782','2021-3-8','62049',70,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Gharib','Abdelhamid','KI410682','1998-7-16',24,'female','Célibataire','GharibAbdelhamid@gmail.com','+212724161797','74','Marrakech','Chaouia-Ouardigha',84352,'Post Chirurgie','GHARIB','ABDELHAMID','+212654787636','2022-1-20','59839',100,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Bouchaouch','Yassin','SE842241','1941-11-7',81,'male','divorcé','BouchaouchYassin@gmail.com','+212781738212','32','Fes','Tanger-Tétouan-Al Hoceïma',21202,'Pré Chirurgie','BOUCHAOUCH','YASSIN','+212778223503','2022-1-13','10383',10,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Abdellaoui','Oumayma','QN485390','2011-4-3',11,'male','Célibataire','AbdellaouiOumayma@gmail.com','+212741114346','92','Oujda','Oriental',38424,'Post Chirurgie','ABDELLAOUI','OUMAYMA','+212659508699','2022-5-14','31166',30,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Moaddine','Fatine','TK947219','2003-9-19',19,'male','Célibataire','MoaddineFatine@gmail.com','+212699309959','52','Khouribga','Oriental',74677,'Pré Chirurgie','MOADDINE','FATINE','+212796621281','2022-2-20','98386',90,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Elahmadi','Chamsdoha','FX966953','1955-12-15',67,'female','Marié','ElahmadiChamsdoha@gmail.com','+212691954791','79','Safi','Oriental',12472,'Post Chirurgie','ELAHMADI','CHAMSDOHA','+212614083798','2021-4-18','49389',100,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Tauil','Tauil','II577831','1990-10-14',32,'female','Célibataire','TauilTauil@gmail.com','+212798724205','27','Nador','Casablanca-Settat',90606,'En Réanimation','TAUIL','TAUIL','+212713179553','2021-11-22','69101',30,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Elouichouani','Abdelali','RL141747','1961-1-16',61,'female','Célibataire','ElouichouaniAbdelali@gmail.com','+212750103760','57','Taza','Tanger-Tétouan-Al Hoceïma',98694,'En Réanimation','ELOUICHOUANI','ABDELALI','+212757372384','2022-2-20','42029',80,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Aguidi','Adnan','FO191097','1988-9-13',34,'male','divorcé','AguidiAdnan@gmail.com','+212682984184','98','Marrakech','Chaouia-Ouardigha',21669,'En Réanimation','AGUIDI','ADNAN','+212777338646','2021-12-8','76692',10,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Souih','Fadoua','EQ340268','1999-6-9',23,'female','Marié','SouihFadoua@gmail.com','+212798816406','85','Fes','Chaouia-Ouardigha',77159,'Post Chirurgie','SOUIH','FADOUA','+212677623945','2022-2-4','23187',90,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Said','Maroua','CU479390','1966-11-7',56,'female','Célibataire','SaidMaroua@gmail.com','+212687187186','60','Casablanca','Meknès-Tafilalet',82353,'Pré Chirurgie','SAID','MAROUA','+212655566887','2021-5-19','13973',30,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Zariouh','Saida','SN986546','2001-6-27',21,'male','Marié','ZariouhSaida@gmail.com','+212693041386','71','Agadir','Tanger-Tétouan-Al Hoceïma',48934,'Pré Chirurgie','ZARIOUH','SAIDA','+212728678934','2021-5-15','88598',60,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Lamnaouar','Imane','DU802147','1976-5-10',46,'female','divorcé','LamnaouarImane@gmail.com','+212760660168','44','Sale','Casablanca-Settat',89062,'Pré Chirurgie','LAMNAOUAR','IMANE','+212742276651','2021-2-6','17358',70,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Ibrahimi','Kaoutar','LO204498','1991-11-18',31,'female','Marié','IbrahimiKaoutar@gmail.com','+212631462369','98','Tétouan','Fès-Boulemane',13615,'Post Chirurgie','IBRAHIMI','KAOUTAR','+212725556154','2021-7-24','88705',70,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Sadoune','Rachid','ZX697184','1978-11-2',44,'female','Marié','SadouneRachid@gmail.com','+212679360672','69','Marrakech','Oriental',10906,'Pré Chirurgie','SADOUNE','RACHID','+212640687667','2021-10-21','17616',30,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Elboubsi','Ikrame','DB943275','1951-11-20',71,'male','Marié','ElboubsiIkrame@gmail.com','+212669044111','60','Temara','Tanger-Tétouan-Al Hoceïma',92845,'En Réanimation','ElBOUBSI','IKRAME','+212653099209','2022-3-14','88905',40,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Takalit','Mohammed','RM697723','1989-4-8',33,'female','Célibataire','TakalitMohammed@gmail.com','+212749336080','87','laayoune','Oriental',92573,'Post Chirurgie','TAKALIT','MOHAMMED','+212744415639','2022-4-7','52227',70,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Belkasmi','Abdellah','OU381582','1964-7-28',58,'male','divorcé','BelkasmiAbdellah@gmail.com','+212775071432','40','Tanger','Fès-Boulemane',99788,'En Réanimation','Belkasmi','ABDELLAH','+212613753038','2021-6-25','77028',80,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Belguenani','Oussama','TI762128','1954-6-17',68,'female','Marié','BelguenaniOussama@gmail.com','+212683183552','58','Sale','Meknès-Tafilalet',95922,'Post Chirurgie','belguenani','oussama','+212619463126','2022-2-9','71124',60,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Elqessouar','Lamyae','VW583519','1993-8-13',29,'male','Célibataire','ElqessouarLamyae@gmail.com','+212657503664','86','Oujda','Fès-Boulemane',70586,'Post Chirurgie','ElQessouar','Lamyae','+212756958711','2021-3-3','51471',70,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Batou','Mohammed','RM221940','1966-6-26',56,'female','Célibataire','BatouMohammed@gmail.com','+212742217987','23','Safi','Chaouia-Ouardigha',57887,'En Réanimation','BATOU','MOHAMMED','+212785838800','2021-5-21','43200',10,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Boukaddour','Oumayma','UC599519','1982-4-4',40,'male','Célibataire','BoukaddourOumayma@gmail.com','+212617092672','28','Fes','Fès-Boulemane',61086,'Pré Chirurgie','BOUKADDOUR','OUMAYMA','+212748520616','2022-4-12','12392',70,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Zenagui','Soukayna','XL537624','1984-6-8',38,'female','Célibataire','ZenaguiSoukayna@gmail.com','+212632809601','80','Tétouan','Oriental',83412,'Pré Chirurgie','ZENAGUI','SOUKAYNA','+212777972622','2021-3-14','24044',30,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Acharraje','Asmae','QP323260','2008-12-21',14,'male','Célibataire','AcharrajeAsmae@gmail.com','+212690066464','17','laayoune','Fès-Boulemane',17011,'Post Chirurgie','ACHARRAJE','ASMAE','+212673343111','2022-2-11','44256',70,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Serhani','Mouad','GR950141','1940-10-17',82,'female','Marié','SerhaniMouad@gmail.com','+212779869500','49','Khemisset','Meknès-Tafilalet',77040,'Post Chirurgie','SERHANI','MOUAD','+212773386747','2021-12-8','70790',70,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Mbarki','Tayeb','GX118270','1957-12-1',65,'female','Célibataire','MbarkiTayeb@gmail.com','+212782532626','76','Temara','Meknès-Tafilalet',17702,'En Réanimation','MBARKI','TAYEB','+212695398461','2021-3-25','68726',20,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Charef','Fatima','PZ250422','1961-12-25',61,'male','divorcé','CharefFatima@gmail.com','+212625287928','71','Nador','Fès-Boulemane',23167,'Pré Chirurgie','CHAREF','FATIMA','+212768495940','2022-5-4','36322',50,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Ayadi','Jemaa','YH144234','1987-2-11',35,'female','Célibataire','AyadiJemaa@gmail.com','+212766009602','35','laayoune','Oriental',53123,'Pré Chirurgie','Ayadi','jemaa','+212689842604','2022-2-20','20603',10,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Moussaoui','Mohammed','VB259523','1987-9-20',35,'female','Célibataire','MoussaouiMohammed@gmail.com','+212778611600','65','Khouribga','Chaouia-Ouardigha',81037,'Pré Chirurgie','MOUSSAOUI','MOHAMMED','+212789782716','2022-3-4','89269',100,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Lahrire','Yassine','DJ394956','2017-4-16',5,'male','Célibataire','LahrireYassine@gmail.com','+212713483090','63','Khemisset','Oriental',31549,'En Réanimation','LAHRIRE','YASSINE','+212648079880','2021-1-22','17118',50,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Loumour','Saloua','VQ632566','1980-10-7',42,'male','divorcé','LoumourSaloua@gmail.com','+212688843192','91','Fes','Tanger-Tétouan-Al Hoceïma',24230,'Pré Chirurgie','Loumour','Saloua','+212670209223','2022-3-18','71532',10,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Hailla','Ilham','NV515408','1988-4-13',34,'female','Marié','HaillaIlham@gmail.com','+212613566318','26','Nador','Oriental',91734,'Post Chirurgie','HAILLA','ILHAM','+212659973016','2022-5-3','65052',30,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Labed','Fatima-zahra','BN421188','2011-1-12',11,'male','Célibataire','LabedFatima-zahra@gmail.com','+212694232801','82','Kenitra','Oriental',93555,'Post Chirurgie','LABED','FATIMA-ZAHRA','+212798700014','2022-2-17','31405',80,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Dahmaj','Youssef','LR210037','1954-10-13',68,'male','divorcé','DahmajYoussef@gmail.com','+212637908775','34','Rabat','Chaouia-Ouardigha',89729,'Pré Chirurgie','DAHMAJ','YOUSSEF','+212736286345','2021-9-16','52972',60,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Rehhali','Fatima','TB584086','1978-4-4',44,'female','Célibataire','RehhaliFatima@gmail.com','+212664101121','82','Fes','Casablanca-Settat',54964,'Post Chirurgie','REHHALI','FATIMA','+212791738612','2021-7-10','30573',50,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Razzaki','Yassine','KD172066','1961-4-11',61,'female','Célibataire','RazzakiYassine@gmail.com','+212630409320','22','Khouribga','Tanger-Tétouan-Al Hoceïma',29529,'Pré Chirurgie','RAZZAKI','YASSINE','+212627023500','2021-9-25','39115',90,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Ramdani','Yassine','HN679386','1964-4-4',58,'male','Marié','RamdaniYassine@gmail.com','+212714666251','59','Sale','Tanger-Tétouan-Al Hoceïma',99323,'En Réanimation','RAMDANI','YASSINE','+212723671909','2021-5-12','65533',20,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Rahali','Oumaima','KY472209','1974-1-27',48,'female','Marié','RahaliOumaima@gmail.com','+212629540534','70','Meknès','Tanger-Tétouan-Al Hoceïma',85201,'Post Chirurgie','RAHALI','OUMAIMA','+212785851112','2021-5-1','44480',90,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Ourraoui','Ayoub','MA598972','1969-2-9',53,'female','Célibataire','OurraouiAyoub@gmail.com','+212757991347','76','Berkane','Tanger-Tétouan-Al Hoceïma',71874,'En Réanimation','OURRAOUI','AYOUB','+212676205137','2021-3-16','48361',20,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Ourarhi','Ahlam','WF649110','1989-1-16',33,'male','divorcé','OurarhiAhlam@gmail.com','+212725013105','94','Oujda','Fès-Boulemane',75802,'En Réanimation','OURARHI','AHLAM','+212769452583','2022-5-3','83759',70,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Oughanem','Yassin','ZM280408','1942-5-22',80,'male','divorcé','OughanemYassin@gmail.com','+212716869975','63','Casablanca','Tanger-Tétouan-Al Hoceïma',22538,'Post Chirurgie','OUGHANEM','YASSIN','+212654974189','2021-7-21','52280',70,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Ouebdil','Oumayma','ZX558086','1942-11-14',80,'male','Marié','OuebdilOumayma@gmail.com','+212723631663','67','Meknès','Meknès-Tafilalet',34475,'En Réanimation','OUEBDIL','OUMAYMA','+212794585531','2021-5-27','56167',50,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Ouazani','Fatine','ZZ439658','1980-3-16',42,'female','Célibataire','OuazaniFatine@gmail.com','+212750242580','78','Fes','Tanger-Tétouan-Al Hoceïma',78312,'En Réanimation','OUAZANI','FATINE','+212742638442','2021-12-1','35011',50,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Ouali','Chaimae','EZ600142','2013-8-24',9,'female','Célibataire','OualiChaimae@gmail.com','+212640576363','54','Sale','Tanger-Tétouan-Al Hoceïma',52235,'En Réanimation','OUALI','CHAIMAE','+212750310699','2022-5-12','20505',100,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Lakroun','Marouan','ZR493714','1981-10-8',41,'female','Marié','LakrounMarouan@gmail.com','+212657075383','34','laayoune','Meknès-Tafilalet',83243,'En Réanimation','LAKROUN','MAROUAN','+212613190844','2022-5-19','93456',60,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Souih','Ikram','JI181500','1974-2-5',48,'male','divorcé','SouihIkram@gmail.com','+212784931948','77','Nador','Casablanca-Settat',92627,'En Réanimation','SOUIH','IKRAM','+212624813802','2022-3-2','90346',10,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Said','Maroua','MK953807','1951-4-3',71,'female','Marié','SaidMaroua@gmail.com','+212695860906','70','Temara','Meknès-Tafilalet',72277,'En Réanimation','SAID','MAROUA','+212774600147','2022-4-13','84685',40,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Zariouh','Saida','LV537255','1954-8-9',68,'male','Célibataire','ZariouhSaida@gmail.com','+212613861503','44','Nador','Chaouia-Ouardigha',73837,'Post Chirurgie','ZARIOUH','SAIDA','+212656783178','2022-3-8','85018',80,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Lamnaouar','Imane','LC494979','2018-5-28',4,'male','Célibataire','LamnaouarImane@gmail.com','+212699049940','12','laayoune','Tanger-Tétouan-Al Hoceïma',60323,'En Réanimation','LAMNAOUAR','IMANE','+212696730973','2022-1-16','98002',20,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Essarrar','Oualid','YU827986','1992-1-15',30,'male','Marié','EssarrarOualid@gmail.com','+212675735826','19','Taza','Oriental',25370,'Pré Chirurgie','ESSARRAR','OUALID','+212671681685','2021-7-13','98747',30,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Boutqchouin','Imane','NH832634','2019-10-4',3,'female','Célibataire','BoutqchouinImane@gmail.com','+212611818946','58','Temara','Chaouia-Ouardigha',59743,'En Réanimation','BOUTQCHOUIN','IMANE','+212726752904','2022-4-6','96457',10,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Gaougaou','Abdellah','RE498746','1952-5-12',70,'female','divorcé','GaougaouAbdellah@gmail.com','+212795053282','47','laayoune','Meknès-Tafilalet',54861,'Post Chirurgie','GAOUGAOU','ABDELLAH','+212723525599','2021-8-12','64572',40,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Laaribi','Marouan','CH392719','1948-4-4',74,'female','Célibataire','LaaribiMarouan@gmail.com','+212620751339','91','Tétouan','Casablanca-Settat',17517,'Post Chirurgie','LAARIBI','MAROUAN','+212644620924','2021-5-22','25808',40,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Boukaddour','Oumayma','UZ169309','2009-5-17',13,'male','Célibataire','BoukaddourOumayma@gmail.com','+212686661690','54','Tétouan','Chaouia-Ouardigha',99485,'En Réanimation','BOUKADDOUR','OUMAYMA','+212759275514','2022-3-6','24743',70,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Bekkouch','Soumia','CZ330283','1943-5-9',79,'female','Célibataire','BekkouchSoumia@gmail.com','+212721320593','69','Rabat','Fès-Boulemane',44915,'Pré Chirurgie','BEKKOUCH','SOUMIA','+212779146166','2022-1-14','72869',80,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Khatiri','Adil','BU846286','2004-4-19',18,'male','divorcé','KhatiriAdil@gmail.com','+212653034601','58','Rabat','Oriental',61529,'Post Chirurgie','KHATIRI','ADIL','+212674564003','2021-3-15','63211',80,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Hararouche','Hafssa','OP613015','1961-9-9',61,'female','divorcé','HararoucheHafssa@gmail.com','+212654724568','35','Taza','Oriental',72685,'En Réanimation','HARAROUCHE','HAFSSA','+212634432974','2021-4-25','39761',20,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Gaour','Hafssa','CB959516','2015-5-13',7,'female','Célibataire','GaourHafssa@gmail.com','+212754878787','75','Tanger','Fès-Boulemane',38074,'Pré Chirurgie','GAOUR','HAFSSA','+212614676622','2021-10-27','10387',50,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Serhani','Mouad','GL466079','1957-2-23',65,'female','Célibataire','SerhaniMouad@gmail.com','+212785488079','76','Kenitra','Chaouia-Ouardigha',65667,'Post Chirurgie','SERHANI','MOUAD','+212634888398','2021-10-13','93712',100,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Mbarki','Tayeb','PO462475','2020-4-20',2,'male','Célibataire','MbarkiTayeb@gmail.com','+212740298947','22','Sale','Meknès-Tafilalet',17195,'Pré Chirurgie','MBARKI','TAYEB','+212658888573','2021-4-26','71774',20,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Charef','Hafssa','VN700212','1998-5-7',24,'female','Célibataire','CharefHafssa@gmail.com','+212748814670','24','Casablanca','Casablanca-Settat',22407,'En Réanimation','CHAREF','HAFSSA','+212733983658','2021-1-28','44108',30,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Hammoutni','Marouan','YN730244','1947-3-17',75,'male','Célibataire','HammoutniMarouan@gmail.com','+212731039413','10','Tétouan','Tanger-Tétouan-Al Hoceïma',74491,'Post Chirurgie','HAMMOUTNI','MAROUAN','+212616953416','2021-2-1','72873',40,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Moussaoui','Mohammed','NN813715','1986-3-15',36,'male','divorcé','MoussaouiMohammed@gmail.com','+212747782635','47','Casablanca','Tanger-Tétouan-Al Hoceïma',42983,'En Réanimation','MOUSSAOUI','MOHAMMED','+212726178153','2022-1-16','73990',20,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Hibach','Yassine','LM969055','2000-6-22',22,'female','Célibataire','HibachYassine@gmail.com','+212711125230','84','Tanger','Tanger-Tétouan-Al Hoceïma',47310,'Pré Chirurgie','HIBACH','YASSINE','+212716739858','2022-1-5','31009',20,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Joud','Somaya','SP706103','1977-8-28',45,'male','Marié','JoudSomaya@gmail.com','+212683677748','44','Safi','Casablanca-Settat',71381,'Post Chirurgie','JOUD','SOMAYA','+212741852840','2021-4-12','30667',80,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Kezzou','Bouchra','HG272401','2011-11-7',11,'male','Célibataire','KezzouBouchra@gmail.com','+212642427019','64','Safi','Meknès-Tafilalet',16118,'Post Chirurgie','KEZZOU','BOUCHRA','+212793399966','2022-1-2','50476',80,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Khamach','Ahmed','XY938993','2021-7-22',1,'female','Célibataire','KhamachAhmed@gmail.com','+212788646864','14','Berkane','Fès-Boulemane',29185,'Post Chirurgie','KHAMACH','AHMED','+212672252267','2021-11-22','71945',40,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Fathi','Ikram','YT896344','1990-2-19',32,'male','Célibataire','FathiIkram@gmail.com','+212693997050','10','Taza','Oriental',63924,'Post Chirurgie','FATHI','IKRAM','+212692829026','2021-2-23','27604',10,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Kharouaa','Fatima-zahra','SU616837','1968-11-18',54,'female','divorcé','KharouaaFatima-zahra@gmail.com','+212680529071','74','laayoune','Casablanca-Settat',57389,'Post Chirurgie','KHAROUAA','FATIMA-ZAHRA','+212759480196','2021-7-12','10308',60,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Khatiri','Youssef','DZ646382','1999-10-16',23,'female','Marié','KhatiriYoussef@gmail.com','+212649175855','30','Sale','Tanger-Tétouan-Al Hoceïma',13318,'En Réanimation','KHATIRI','YOUSSEF','+212693668451','2021-2-1','17850',90,(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST'));


--
-- Table structure for table `activites`
--

CREATE TABLE anistrea.activites (
  id_activite INT AUTO_INCREMENT,
  activite TEXT NOT NULL,
  centre TEXT NOT NULL,
  dateDebut DATE NOT NULL,
  dateFin DATE NOT NULL,
  organisateur TEXT NOT NULL,
  organisation TEXT NOT NULL,
  telephone TEXT NOT NULL,
  statutActivite TEXT NOT NULL,
  progression INT NOT NULL,
  description TEXT NOT NULL,
  id_anesthesiste INT NOT NULL,
  PRIMARY KEY (id_activite),
  FOREIGN KEY (id_anesthesiste) REFERENCES anistrea.anesthesiste(id_anesthesiste)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activites`
--

INSERT INTO anistrea.activites(activite,centre,dateDebut,dateFin,organisateur,organisation,telephone,statutActivite,progression,description,id_anesthesiste) VALUES
 ('activite0','centre0','2022-2-6','2022-3-1','organisateur','organisation','+212698695610','Finie','70','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite1','centre1','2021-2-16','2021-3-11','organisateur','organisation','+212795835455','Finie','100','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite2','centre2','2022-3-21','2022-4-16','organisateur','organisation','+212613122543','En Travail','60','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite3','centre3','2022-1-15','2022-2-10','organisateur','organisation','+212651651324','En Travail','20','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite4','centre4','2021-10-16','2021-11-11','organisateur','organisation','+212635188321','Finie','30','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite5','centre5','2022-3-8','2022-4-3','organisateur','organisation','+212634779736','Finie','50','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite6','centre6','2021-10-9','2021-11-4','organisateur','organisation','+212655233787','Finie','20','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite7','centre7','2022-4-12','2022-5-7','organisateur','organisation','+212764453748','Finie','40','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite8','centre8','2022-2-13','2022-3-8','organisateur','organisation','+212751679473','Anulée','50','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite9','centre9','2022-1-19','2022-2-14','organisateur','organisation','+212790611779','Anulée','40','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite10','centre10','2022-1-15','2022-2-10','organisateur','organisation','+212712613648','Anulée','70','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite11','centre11','2021-6-15','2021-7-10','organisateur','organisation','+212794090723','Anulée','70','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite12','centre12','2021-8-28','2021-9-23','organisateur','organisation','+212712348365','En Travail','100','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite13','centre13','2021-1-28','2021-2-23','organisateur','organisation','+212751822990','Finie','90','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite14','centre14','2021-4-14','2021-5-9','organisateur','organisation','+212721507114','Finie','80','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite15','centre15','2022-2-19','2022-3-14','organisateur','organisation','+212621570647','Anulée','80','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite16','centre16','2021-7-21','2021-8-16','organisateur','organisation','+212648214128','Anulée','10','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite17','centre17','2021-7-12','2021-8-7','organisateur','organisation','+212722987147','En Travail','30','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite18','centre18','2022-1-6','2022-2-1','organisateur','organisation','+212760033731','Finie','60','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite19','centre19','2021-10-8','2021-11-3','organisateur','organisation','+212778769941','Finie','100','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite20','centre20','2022-4-20','2022-5-15','organisateur','organisation','+212668986176','Finie','80','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite21','centre21','2022-3-14','2022-4-9','organisateur','organisation','+212669811703','Finie','30','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite22','centre22','2021-1-28','2021-2-23','organisateur','organisation','+212684363250','Anulée','10','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite23','centre23','2021-9-14','2021-10-9','organisateur','organisation','+212637695467','Anulée','20','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite24','centre24','2021-11-19','2021-12-14','organisateur','organisation','+212625217975','En Travail','100','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite25','centre25','2022-4-14','2022-5-9','organisateur','organisation','+212773745852','Finie','10','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite26','centre26','2021-8-13','2021-9-8','organisateur','organisation','+212769197748','Finie','70','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite27','centre27','2022-1-12','2022-2-7','organisateur','organisation','+212764302303','En Travail','40','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite28','centre28','2021-2-21','2021-3-16','organisateur','organisation','+212662430879','En Travail','60','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite29','centre29','2022-1-10','2022-2-5','organisateur','organisation','+212641683493','Finie','10','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite30','centre30','2021-6-24','2021-7-19','organisateur','organisation','+212745154717','En Travail','20','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite31','centre31','2021-9-9','2021-10-4','organisateur','organisation','+212623330759','Anulée','50','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite32','centre32','2022-1-20','2022-2-15','organisateur','organisation','+212648593871','Finie','40','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite33','centre33','2021-2-28','2021-3-23','organisateur','organisation','+212670340547','Anulée','60','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite34','centre34','2022-3-12','2022-4-7','organisateur','organisation','+212778495570','Anulée','50','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite35','centre35','2022-2-7','2022-3-2','organisateur','organisation','+212732250658','En Travail','80','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite36','centre36','2022-1-8','2022-2-3','organisateur','organisation','+212679830951','Anulée','40','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite37','centre37','2022-4-19','2022-5-14','organisateur','organisation','+212738422871','Anulée','70','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite38','centre38','2021-4-10','2021-5-5','organisateur','organisation','+212710458248','Anulée','10','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite39','centre39','2022-1-6','2022-2-1','organisateur','organisation','+212611351652','En Travail','80','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite40','centre40','2022-1-21','2022-2-16','organisateur','organisation','+212748290369','Finie','20','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite41','centre41','2021-6-7','2021-7-2','organisateur','organisation','+212628381564','En Travail','90','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite42','centre42','2022-1-21','2022-2-16','organisateur','organisation','+212650828594','Anulée','90','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite43','centre43','2022-3-14','2022-4-9','organisateur','organisation','+212623628333','En Travail','70','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite44','centre44','2022-2-19','2022-3-14','organisateur','organisation','+212697896177','Finie','20','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite45','centre45','2022-1-15','2022-2-10','organisateur','organisation','+212786264528','Finie','20','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite46','centre46','2022-4-15','2022-5-10','organisateur','organisation','+212730242655','Anulée','20','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite47','centre47','2021-10-25','2021-11-20','organisateur','organisation','+212640328623','Anulée','100','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite48','centre48','2022-4-14','2022-5-9','organisateur','organisation','+212669408009','Anulée','90','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('activite49','centre49','2021-1-13','2021-2-8','organisateur','organisation','+212795188652','En Travail','30','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST'));

INSERT INTO anistrea.activites(activite,centre,dateDebut,dateFin,organisateur,organisation,telephone,statutActivite,progression,description,id_anesthesiste) VALUES
 ('Don du sang','centre0','2022-5-9','2022-6-9','organisateur','organisation','+212782460932','Finie','70','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Recherche scientifique','centre1','2022-5-8','2022-6-8','organisateur','organisation','+212794509387','Anulée','80','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Vaccination','centre2','2022-5-4','2022-6-4','organisateur','organisation','+212620684506','Anulée','20','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Orientation des étudiants','centre3','2022-5-12','2022-6-12','organisateur','organisation','+212796014310','En Travail','50','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Vaccination (covid-19)','centre4','2022-5-9','2022-6-9','organisateur','organisation','+212767884356','Anulée','70','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST')),
 ('Recherche scientifique(h1-n1)','centre5','2022-5-5','2022-6-5','organisateur','organisation','+212621112258','En Travail','100','',(SELECT id_anesthesiste FROM anistrea.anesthesiste WHERE nom='GUEST'));


-- --------------------------------------------------------

--
-- Table structure for table `ac_cardiologues`
--

CREATE TABLE anistrea.ac_cardiologues (
  id_AC_cardiologue INT AUTO_INCREMENT,
  AC_cardiologue TEXT NOT NULL,
  AC_hopital TEXT NOT NULL,
  id_patient INT NOT NULL,
  PRIMARY KEY (id_AC_cardiologue),
  FOREIGN KEY (id_patient) REFERENCES anistrea.patient(id_patient)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ac_cardiologues`
--



-- --------------------------------------------------------

--
-- Table structure for table `allergies`
--

CREATE TABLE anistrea.allergies (
  id_allergie INT AUTO_INCREMENT,
  allergie TEXT NOT NULL,
  reaction TEXT NOT NULL,
  id_patient INT NOT NULL,
  PRIMARY KEY (id_allergie),
  FOREIGN KEY (id_patient) REFERENCES anistrea.patient(id_patient)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allergies`
--



-- --------------------------------------------------------

--
-- Table structure for table `am_maladies`
--

CREATE TABLE anistrea.am_maladies (
  id_maladie INT AUTO_INCREMENT,
  maladie TEXT NOT NULL,
  id_patient INT NOT NULL,
  PRIMARY KEY (id_maladie),
  FOREIGN KEY (id_patient) REFERENCES anistrea.patient(id_patient)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `am_maladies`
--



-- --------------------------------------------------------

--
-- Table structure for table `anamnèse_cardiovasculaire`
--

CREATE TABLE anistrea.anamnèse_cardiovasculaire (
  id_ANC INT AUTO_INCREMENT,
  ANC1 TEXT NOT NULL,
  ANC2 TEXT NOT NULL,
  ANC3 TEXT NOT NULL,
  ANC4 TEXT NOT NULL,
  ANC5 TEXT NOT NULL,
  id_patient INT NOT NULL,
  PRIMARY KEY (id_ANC),
  FOREIGN KEY (id_patient) REFERENCES anistrea.patient(id_patient)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `anamnèse_cardiovasculaire`
--



-- --------------------------------------------------------

--
-- Table structure for table `anamnèse_digestive_nutritionnelle`
--

CREATE TABLE anistrea.anamnèse_digestive_nutritionnelle (
  id_ADN INT AUTO_INCREMENT,
  ADN1 TEXT NOT NULL,
  ADN2PoidsPerdus INT NOT NULL,
  ADN2Duree INT NOT NULL,
  ADN3 INT NOT NULL,
  id_patient INT NOT NULL,
  PRIMARY KEY (id_ADN),
  FOREIGN KEY (id_patient) REFERENCES anistrea.patient(id_patient)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `anamnèse_digestive_nutritionnelle`
--



-- --------------------------------------------------------
--
-- Table structure for table `anamnèse_respiratoire`
--

CREATE TABLE anistrea.anamnèse_respiratoire (
  id_ANR INT AUTO_INCREMENT,
  ANR1 TEXT NOT NULL,
  ANR2 TEXT NOT NULL,
  ANR3Quantite TEXT NOT NULL,
  ANR3Duree TEXT NOT NULL,
  ANR4Cigarette TEXT NOT NULL,
  ANR4Nbr INT NOT NULL,
  ANR4Age INT NOT NULL,
  id_patient INT NOT NULL,
  PRIMARY KEY (id_ANR),
  FOREIGN KEY (id_patient) REFERENCES anistrea.patient(id_patient)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `anamnèse_respiratoire`
--



-- --------------------------------------------------------
--
-- Table structure for table `antécédents_anesthésiques`
--

CREATE TABLE anistrea.antécédents_anesthésiques (
  id_AA INT AUTO_INCREMENT,
  AA1 TEXT NOT NULL,
  AA2 TEXT NOT NULL,
  AA3 TEXT NOT NULL,
  AA4 TEXT NOT NULL,
  AA5 TEXT NOT NULL,
  id_patient INT NOT NULL,
  PRIMARY KEY (id_AA),
  FOREIGN KEY (id_patient) REFERENCES anistrea.patient(id_patient)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `antécédents_anesthésiques`
--


-- --------------------------------------------------------
--
-- Table structure for table `antécédents_chirurgicaux`
--

CREATE TABLE anistrea.antécédents_chirurgicaux (
  id_chirurgie INT AUTO_INCREMENT,
  chirurgie TEXT NOT NULL,
  id_patient INT NOT NULL,
  PRIMARY KEY (id_chirurgie),
  FOREIGN KEY (id_patient) REFERENCES anistrea.patient(id_patient)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `antécédents_chirurgicaux`
--




-- -----------------------------------------------------------
--
-- Table structure for table `antécédents_médicaux`
--

CREATE TABLE anistrea.antécédents_médicaux (
  id_AM INT AUTO_INCREMENT,
  AM1 TEXT NOT NULL,
  AM2 TEXT NOT NULL,
  AM3 TEXT NOT NULL,
  AM4 TEXT NOT NULL,
  AM5 TEXT NOT NULL,
  AM6 TEXT NOT NULL,
  AM7 TEXT NOT NULL,
  AM8 TEXT NOT NULL,
  AM9 TEXT NOT NULL,
  AM10 TEXT NOT NULL,
  AM11 TEXT NOT NULL,
  AM12 TEXT NOT NULL,
  AM13 TEXT NOT NULL,
  AM14 TEXT NOT NULL,
  AM15 TEXT NOT NULL,
  AM16 TEXT NOT NULL,
  AM17 TEXT NOT NULL,
  AM18 TEXT NOT NULL,
  AM19 TEXT NOT NULL,
  AM20 TEXT NOT NULL,
  id_patient INT NOT NULL,
  PRIMARY KEY (id_AM),
  FOREIGN KEY (id_patient) REFERENCES anistrea.patient(id_patient)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `antécédents_médicaux`
--




-- -----------------------------------------------------------

--
-- Table structure for table `ar_pneumologues`
--

CREATE TABLE anistrea.ar_pneumologues (
  id_ar_pneumologue INT AUTO_INCREMENT,
  ar_pneumologue TEXT NOT NULL,
  ar_hopital TEXT NOT NULL,
  id_patient INT NOT NULL,
  PRIMARY KEY (id_ar_pneumologue),
  FOREIGN KEY (id_patient) REFERENCES anistrea.patient(id_patient)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ar_pneumologues`
--




-- -----------------------------------------------------------

--
-- Table structure for table `medicaments`
--

CREATE TABLE anistrea.medicaments (
  id_medicament INT AUTO_INCREMENT,
  medicament INT NOT NULL,
  dosage INT NOT NULL,
  nbrFoisParJour INT NOT NULL,
  id_patient INT NOT NULL,
  PRIMARY KEY (id_medicament),
  FOREIGN KEY (id_patient) REFERENCES anistrea.patient(id_patient)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicaments`
--





-- -----------------------------------------------------------

--
-- Table structure for table `questionnaire_pré_anesthesique`
--

CREATE TABLE anistrea.questionnaire_pré_anesthesique (
  id_questionnaire INT AUTO_INCREMENT,
  DateIntervention DATE NOT NULL,
  lieuIntervention TEXT NOT NULL,
  poids DECIMAL(6,2) NOT NULL,
  taille DECIMAL(6,2) NOT NULL,
  QRPNom TEXT NOT NULL,
  QRPPrenom TEXT NOT NULL,
  id_patient INT NOT NULL,
  PRIMARY KEY (id_questionnaire),
  FOREIGN KEY (id_patient) REFERENCES anistrea.patient(id_patient)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionnaire_pré_anesthesique`
--





-- -----------------------------------------------------------

--
-- Table structure for table `toxiques`
--

CREATE TABLE anistrea.toxiques (
  id_toxique INT AUTO_INCREMENT,
  boisson INT NOT NULL,
  quantite INT NOT NULL,
  id_patient INT NOT NULL,
  PRIMARY KEY (id_toxique),
  FOREIGN KEY (id_patient) REFERENCES anistrea.patient(id_patient)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toxiques`
--


-- -----------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE anistrea.notes(
    id INT AUTO_INCREMENT,
    type TEXT,
    date DATE,
    note TEXT,
    id_anesthesiste INT,
    PRIMARY KEY (id),
  	FOREIGN KEY (id_anesthesiste) REFERENCES anistrea.anesthesiste(id_anesthesiste)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Hazırlanma Vaxtı: 17 Fev, 2021 saat 04:20
-- Server versiyası: 5.7.33-cll-lve
-- PHP Versiyası: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Verilənlər Bazası: `argroupa_1`
--

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `slogan_az` text COLLATE utf8_bin NOT NULL,
  `slogan_en` text COLLATE utf8_bin NOT NULL,
  `slogan_ru` text COLLATE utf8_bin NOT NULL,
  `about_az` text COLLATE utf8_bin NOT NULL,
  `about_en` text COLLATE utf8_bin NOT NULL,
  `about_ru` text COLLATE utf8_bin NOT NULL,
  `obrand_az` text COLLATE utf8_bin NOT NULL,
  `obrand_en` text COLLATE utf8_bin NOT NULL,
  `obrand_ru` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `about_us`
--

INSERT INTO `about_us` (`id`, `slogan_az`, `slogan_en`, `slogan_ru`, `about_az`, `about_en`, `about_ru`, `obrand_az`, `obrand_en`, `obrand_ru`) VALUES
(1, '  İcazə verin, <br>\r\n Azərbaycanda yanğın, akustik, hidro və istilik izolyasiyası sahəsində fəaliyyət göstərən \"AR GROUP CONSTRUCTİON SERVİCES\" MMC şirkəti ilə tanış edək.\r\nŞirkətimiz uzun müddətdir ki, Azərbaycanda passiv yanğın sistemlərinin (Firestop & \r\n Fireproof) quraşdırılması ilə məşğuldur. İşçilər müvafiq təlim keçmiş və sertifikatlar almışlar.\r\n  Ən mürəkkəb problemlərin həlli üçün təkliflər verən yüksək ixtisaslı bir heyətimiz var. Komandamız çox qısa bir müddət ərzində istənilən işin öhdəsindən gələ bilirlər.\r\n  Bir şirkət olaraq, xidmətlərimizin yerinə yetirilməsində yalnız yüksək keyfiyyətli avadanlıqlardan istifadə edirik. Xidmətlərimiz və sistemlərimiz əlavə dəyəri olan peşəkar inşaat innovativ həllər təklif edir. Məqsədimiz, özümüzü ən yüksək səviyyəli peşəkar bir şirkət kimi elan etmək və yüksək səviyyəli xidmət təqdim etmək və xidmətimizin bütün sahələrində innovativ həllər təqdim etmək, təhlükəsizlik qaydalarına riayət etmək və onlara əməl olunmasının təşkili ilə mümkün qədər yerli bazarın inkişafını təmin etməkdir.\r\n', 'Let us introduce our company “ AR GROUP CONSTRUCTION SERVICES ”  LLC, which operates in Firestop, Acoustic, Hydro and Thermal Isolation in Azerbaijan.\r\n\r\n  Our company has been practicing Azerbaijan \"Firestop & Fireproof\" Passive Fire Preserving Systems installation works. Employees participated in appropriate training and were provided with certificates.\r\n\r\n   We have highly skilled team provide suggestions for solving the most challenging tasks.\r\nOur masters are able to cope with any work in a very short period of time.\r\n\r\n  As a company, we use only high quality equipment during our services performing. Our services and systems offer the construction professional innovative solutions with outstanding added value. Our goal - to express themselves on the market as a professional company of upper class and make the fullest possible development of the local market through the introduction of high-quality services and delivering innovative solutions in all areas of our services in conjunction with the observance of safety rules and to arrange for their compliance.\r\n', 'Позвольте, <br> Представить вам нашу компанию ООО “ AR GROUP CONSTRUCTİON SERVİCES\", которая работает в области противопожарной, акустической, гидра - и теплоизоляции в Азербайджане.\r\n\r\n          Наша компания уже давно практикует работу по установке пассивных противопожарных систем \"Firestop & Fireproof\" в Азербайджане. Сотрудники прошли соответствующее обучение и получили соответствующие сертификаты.\r\n\r\n          У нас есть высококвалифицированная команда, предоставляющая предложения для решения самых сложных задач, Наши мастера способны справиться с любой работой за очень короткий промежуток времени.\r\n\r\n Как компания, мы используем только высококачественное оборудование при выполнении наших услуг. Наши услуги и системы предлагают строительные профессиональные инновационные решения с выдающейся добавленной стоимостью. Наша цель-заявить о себе на рынке как о профессиональной компании высшего класса и сделать максимально возможным развитие местного рынка за счет внедрения качественного сервиса и предоставления инновационных решений во всех сферах наших услуг в сочетании с соблюдением правил безопасности и организацией их соблюдения.\r\n', 'Biz komandada birgə işləməyə istiqamətlənirik və yalnız layihə boyu deyil, həm də onun başa çatdırılmasından sonra öz işimizin və müştərilərimizin arxasında möhkəm dayanırıq. Biz müştərinin dəyişən tendensiyalarına və tələblərinə uyğun olaraq uzunmüddətli münasibətlər və həllin daha da inkişaf etdirilməsini qururuq.', 'We focus on teamwork and firmly stand behind our work and our clients, not only throughout the project, but also after its completion. We build long-term relationships and further development of the solution in accordance with changing trends and customer requirements.', 'Мы ориентируемся на совместную работу в команде и твердо стоим за своей работой и своими клиентами не только на протяжении проекта, но и после его завершения. Мы строим долгосрочные отношения и дальнейшее развитие решения в соответствии с изменяющимися тенденциями и требованиями заказчика.', 'Fischer, Protecta', 'Fisher, Protecta', 'Fisher, Protecta');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `pass` varchar(255) COLLATE utf8_bin NOT NULL,
  `IP` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`, `IP`) VALUES
(1, 'rmustafayev@argroup.com.az', 'ARG2778424', '');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `certfs`
--

CREATE TABLE `certfs` (
  `id` int(11) NOT NULL,
  `datev` varchar(50) COLLATE utf8_bin NOT NULL,
  `tip` varchar(60) COLLATE utf8_bin NOT NULL,
  `from` varchar(50) COLLATE utf8_bin NOT NULL,
  `file` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `certfs`
--

INSERT INTO `certfs` (`id`, `datev`, `tip`, `from`, `file`) VALUES
(1, '29.01.2020', 'Certificate', 'AR GROUP', 'Cd44c5a5a21375e2106711a7e662e14a9.pdf');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `img` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `clients`
--

INSERT INTO `clients` (`id`, `name`, `img`) VALUES
(4, 'Pasha Construction', 'c94bfdd67d9aeb37408c1eec1855470f.jpg'),
(5, '\"North West Construction\"', 'c49aab2cad4ab150770c9857e21af7d9.png'),
(6, '\"Gilan Holding\"', 'f9b564b02c62db08b0e7afd3883992a0.png'),
(7, 'BRAVO', '843bff3df526a54413c9764853fc3c7c.jpg'),
(8, '\"Kontinent İnşaat\"', 'f16af146ca437beb89f1d26edfd27049.png'),
(9, '\"Shinkar Holding\"', '0ffb73479a545985ecf1f16e693912a4.jpg'),
(10, '\"ZETAŞ YAPI\"', '9d6444da62aac836976d9801c6d5df80.png'),
(11, '\"AZKOND\"', '83130445e402a50d3dbcbfde3ed4351b.jpg'),
(12, '\"AZ-MEP\"', 'faa6c73bd643ac366823d9ace071e88c.png'),
(13, '\"BAKELEKTRO\" ASC', '8f6dde4f3149e3a58f79454fc9491225.jpg'),
(14, '\"MERGA \"', '39009f5775a37a42c0d32afe4af7cdab.png'),
(15, '\"Terra/Struc\"', 'dfd80b041c3e9d167c512613f365e77c.jpg'),
(16, '\"AR GROUP CS\"', 'f9b1a9f4baf408cb1cb1e39caabe0e52.jpg'),
(18, '\"Anel Group\"', 'f0beb894c8a736148863e364c44ff67f.png'),
(19, 'ALLTECH ENGINEERING', '265b1a411e334a265122b24f7b847107.png'),
(20, '\"HZR GROUP\"', '32c8327825ef3e50f6ac8ab2d966c343.png'),
(21, 'Lotfi Zadeh Technology Center', '21ab49441c67011408c17ec8fd211b43.png'),
(22, '\"BSS-GROUP\"', '222388c07c0fd283baa5b7915c213e71.png'),
(23, '\"Proffersolution\"', 'efd5add0287dd4bf66fc76e99c07a058.png'),
(25, '\"AKOND\"', '4ba606947a077d1f3174574fe60caee4.jpg'),
(26, '\"WORKPLACE Interiors\"', 'a552016f9aa1c415cdec8e2633a65d9c.jpg'),
(27, '\"NITEL\"', '2e1970832e831fb88615515fb062ceda.jpg'),
(28, '\"SANTES Group\"', '0758f3f482702b58e0211129ae3f834e.png'),
(29, '\"Sinerji İnşaat\"', '3906d2399a659742ad5be9f1878a01cf.png'),
(30, '“AZCONSTRUCTİON” QSC ', '8228ef98169a43067d6f4f5137aedcd7.jpg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `subject` varchar(255) COLLATE utf8_bin NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL,
  `IP` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `contact`
--

INSERT INTO `contact` (`id`, `date`, `name`, `email`, `subject`, `message`, `IP`) VALUES
(2, '03.01.2020 11:15:05', 'Ramin', 'office@argroup.com.az', 'zzzzz', 'aaaaa', ''),
(3, '04.01.2020 22:18:24', 'Ramin', 'rmustafayev@argroup.com.az', 'zzzzz', 'AAAA', ''),
(4, '02.02.2020 02:39:42', 'Ramin Mustafayev', 'RMustafayev@argroup.com.az', 'Test', 'Test', ''),
(5, '13.04.2020 07:13:26', 'KennethIdota', 'raphaeIngerfign@gmail.com', 'A new way of advertising.', 'Good day!  argroup.az \r\n \r\nDid you know that it is possible to send letter totally legally? \r\nWe propose a new legal way of sending business proposal through contact forms. Such forms are located on many sites. \r\nWhen such letters are sent, no personal data is used, and messages are sent to forms specifically designed to receive messages and appeals. \r\nAlso, messages sent through feedback Forms do not get into spam because such messages are considered important. \r\nWe offer you to test our service for free. We will send up to 50,000 messages for you. \r\nThe cost of sending one million messages is 49 USD. \r\n \r\nThis offer is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - feedbackform@make-success.com', ''),
(6, '05.05.2020 10:08:12', 'Alex Hill', 'alexhill.digital@gmail.com', 'Free SEO and PPC support during COVID', 'As a leading UK Digital Agency, we want to help businesses during the global pandemic. \r\nSo we have developed this free service in order to help companies thrive. \r\nSee how good your SEO or PPC is with a free report outlining your current performance, hidden potential, and how you can improve. \r\nFree SEO Report: https://www.seoworks.co.uk/free-seo-audit/ \r\nFree PPC Report: https://www.seoworks.co.uk/free-ppc-audit/ \r\nOnline marketing is important right now, with more people searching online whilst at home. Get some actionable advice from our award-winning team today. \r\nBest wishes during these challenging times, \r\nThe SEO Works team \r\nhttps://www.seoworks.co.uk', ''),
(7, '06.05.2020 23:55:09', 'Raymond 	Brown', 'info@thecctvhub.com', 'Human body thermal camera high accuracy and medical supplies', 'Dear Sir/mdm, \r\n \r\nHow are you? \r\n \r\nWe supply medical products: \r\n \r\nMedical masks \r\n3M 1860, 9502, 9501, 3ply, KN95, KN99, N95 masks \r\nProtective masks \r\nEye mask \r\nProtective cap \r\nDisinfectant \r\nHand sanitiser \r\nMedical alcohol \r\nEye protection \r\nDisposable latex gloves \r\nProtective suit \r\nIR non-contact thermometers \r\nHuman body thermal cameras \r\n \r\nfor Body Temperature Measurement up to accuracy of ±0.1?C \r\nAdvantages of thermal imaging detection: \r\n \r\n1. Intuitive, efficient and convenient, making users directly \"see\" the temperature variation. \r\n2. Thermal condition of different locations for comprehensive analysis, providing more information for judgment \r\n3. Avoiding judgment errors, reducing labor costs, and discovering poor heat dissipation and hidden trouble points \r\n4. PC software for data analysis and report output \r\n \r\nWhatsapp: +65 87695655 \r\nTelegram: cctv_hub \r\nSkype: cctvhub \r\nEmail: sales@thecctvhub.com \r\nW: http://www.thecctvhub.com/ \r\n \r\nIf you do not wish to receive email from us again, please let us know by replying. \r\n \r\nregards, \r\nRaymond', ''),
(8, '08.05.2020 17:06:00', 'YOZAWA KEN', 'avatoniebtea@rediffmail.com', 'I am contacting you from Japan (Tokyo).', 'We offer services that can be sold to over 10 million businesses in 45 countries. \r\nInstead of advertising by email, SMS, SNS, we will send a message that directly reaches the business owner \r\nPlease check the homepage because it is a service that does not exist in your country \r\n \r\nhttp://1-0x.com/2020tokyo/', ''),
(9, '27.08.2020 03:38:24', 'Michael Smith', 'michaelsmith11819@gmail.com', 'Investment Opportunity', 'Greetings! \r\n \r\nHow are you today? Hope fine? \r\nI genuinely solicit for the assistance of a reliable and honest foreign partner that will work closely with me in a joint venture partnership. I can make funds available for investments in a joint venture partnership. Hence, I solicit for your assistance in this business partnership. \r\nIf you are interested in this lucrative business partnership, please let me know so that I will give you more details about this pending transaction. \r\n \r\nI look forward to hearing from you soon! \r\n \r\nBest Regards, \r\n \r\nMr. Michael Smith. \r\nPrincipal Partner \r\nE-mail: michaelsmith11818@gmail.com', ''),
(10, '27.08.2020 09:48:41', 'RobertBag', 'atrixxtrix@gmail.com', 'Fever screening thermal CCTV camera and medical masks', 'Dear Sir/mdm, \r\n \r\nHow are you? \r\n \r\nWe supply Professional surveillance & medical products: \r\n \r\nMoldex, makrite and 3M N95 1860, 9502, 9501, 8210 \r\n3ply medical, KN95, FFP2, FFP3, PPDS masks \r\nFace shield/medical goggles \r\nNitrile/vinyl/Latex/PP gloves \r\nIsolation/surgical gown lvl1-4 \r\nProtective PPE/Overalls lvl1-4 \r\nIR non-contact/oral thermometers \r\nsanitizer dispenser \r\n \r\nLogitech/OEM webcam \r\nMarine underwater CCTV \r\nExplosionproof CCTV \r\n4G Solar CCTV \r\nHuman body thermal cameras \r\nIP & analog cameras for homes/industrial/commercial \r\n \r\nLet us know which products you are interested and we can send you our full pricelist. \r\n \r\nWe also welcome distributors/resellers. Our CCTV cameras are made in Taiwan. Feel free to contact us below \r\n \r\nWhatsapp: +65 87695655 \r\nTelegram: cctv_hub \r\nSkype: cctvhub \r\nEmail: sales@thecctvhub.com \r\nW: http://www.thecctvhub.com/ \r\n \r\nIf you do not wish to receive email from us again, please let us know by replying. \r\n \r\nregards, \r\nCCTV HUB', ''),
(11, '27.08.2020 17:50:48', 'dsincrrxj', 'nkfkfmpcx@rambler.ru', 'Хватит ждать забери свой бонус быстрее', 'Получи 50 Фриспинов + 500 дол бонуса за регистрацию в онлайн казино \r\n \r\nhttps://laconcornsemb.tk \r\n \r\nЛучший онлайн сайт для игры на деньги', ''),
(12, '29.08.2020 19:32:31', 'Jimmy Scowley', 'jimmyscowley@gmail.com', 'Ready-made scale models of World of Tanks', 'Dear Sir/mdm, \r\n \r\nOur company Resinscales is looking for distributors and resellers for its unique product: ready-made tank models from the popular massively multiplayer online game - World of Tanks. \r\n \r\nSuch models are designed for fans of the game WoT and collectors of military models. \r\n \r\nWhat makes our tank models stand out? \r\n \r\n- We are focusing on tanks not manfactured by any companies, therefore we have no competitors \r\n- Accurately made in 1/35 scale \r\n- Very high accuracy of details and colors \r\n- The price of the model tank is the same as the production cost \r\n \r\nIf you are interested to be our distributor/reseller then please let us know from the contacts below. \r\n \r\nhttps://www.resinscales.com/ \r\nhttps://www.facebook.com/resinscales.models/ \r\ncontact@resinscales.com \r\n \r\nIgnore this message if it had been wrongly sent to you.', ''),
(13, '30.08.2020 06:25:56', 'Margarito Dehaven', 'dehaven.margarito59@gmail.com', 'You Have Been Called Upon', 'Hello, I have been informed to contact you. The CIA has been doing intensive research for the past fifty years researching on what we call so called life. That information has been collected and presented for you here https://cutt.ly/cfgu7Vw This has been the finding as of seventeen years ago as of today. Now governments and other large organizations have develop technology around these concepts for their own deceptive uses. Soon you will be contacted by other means for counter measures and the part that you play in all this. Please get this as soon as possible because there are powers that be to take down this information about this.', ''),
(14, '01.09.2020 16:47:35', 'StevenChurl', 'conisderitanswered@workmail.com', 'Call Answering - 7 day free trial!', 'ey, \r\n \r\nI hope you are well. I wondered if we may be able to help your business. We offer call answering and virtual receptionist services. We help all kinds of businesses, some with just a handful of calls to answer and others with thousands. A few key facts: \r\n \r\n1. We will not be beaten on price \r\n2. Our plans start from £49 per month \r\n3. We offer a free 7-day trial \r\n4. We provide incredible customer service to your clients \r\n \r\nI wondered if you may be interested in finding out more, or setting up a free trial? You can learn more here: \r\n \r\nhttp://www.consideritanswered.com/ \r\n \r\nHope to hear from you soon! \r\n \r\nSteven \r\nConsider It Answered \r\n \r\nhttp://www.consideritanswered.com/', ''),
(15, '04.09.2020 01:34:16', 'Sandra Amparo', 'worldwideclaimsagenti@gmail.com', 'CONGRATULATIONS FOR BEEN A LUCKY WINNER', 'WORLD HEALTH ORGANIZATION / MICRO SOFT CORPORATION / EURO MILLION LOTTERIA \r\nGrand Royale  Park Spain. \r\nDear Beneficiary. \r\nWe are pleased to announce you as one of the 10 lucky winners in the Euro Millions Lottery International Email Address draw on the 28th of August 2020, due to the mixture of names and address the result was released on the 2nd of September 2020. \r\nAll 10 winning addresses were randomly selected from a batch of 50,000,000 international email addresses. Your email address emerged alongside \r\nWith 10 others as a category 3 Winner in the Euro Milliones Lottery Draw. Consequently, you have therefore been approved for a total payout of Euros €1,000,000.00 (One Million Euros Only) The following particulars are attached to your lotto payment order: \r\n(I)    Batch No: BCA/022/CAC(ii)   Ticket No : 197-033 -02345(iii)  Lucky No: 04-6-8-12-24 \r\n(iv)   Ref No: MTD/SAN/9500/LAS. \r\nThe Euro Millions Lottery Program internet draw is held once in a Year, and is so organized to encourage all the people facing these Covid-19 cases. We are proud to say that over 200 Million Euros are won annually in more than 150 countries worldwide. \r\nTo claim your winning prize you are to contact the appointed agent as soon as possible for the immediate release of your winnings: \r\nNAME: DR.AMPARO ITUBI \r\nAMUCIO ABOGADOS FINANCIAL ATTORNEY SSL. \r\nEmail: amucioabogados@infocaixa.info \r\nContact Phone : 0034 -603 - 248 - 636. \r\nSincerely Yours,. Mrs. Sandra Amparo PROMOTION CORDINATOR.', ''),
(16, '09.09.2020 13:57:20', 'TammyJen', 'missoldcarfinance2@mail.com', 'Mis Sold Car Finance Claims And COVID Finance Advice', 'Hi \r\nMis Sold Car Finance Is a UK Company helping tens of thousands of people with car finance issues due to mis selling, saving them £1000s of pounds. \r\nAlso helping customers who have been effected financially by COVID 19 and are struggling to pay there Car Finance \r\nWe specialise in PCP claims with mis selling on mileage,negative equity,pressured selling etc \r\nWe will work on a NO WIN NO FEE Basis \r\nVisit our website and complete our short form to see if you qualify \r\nhttps://www.missoldcarfinance.com \r\nOr Call 07936313628 \r\nThank you and stay safe \r\nFrom all the team at \r\nMis Sold Car Finance', ''),
(17, '10.09.2020 10:03:04', 'Mike Albertson\r\n', 'no-replytarce@google.com', 'New: DA50 for argroup.az', 'Gооd dаy! \r\nIf you want to get ahead of your competition, have a higher Domain Authority score. Its just simple as that. \r\nWith our service you get Domain Authority above 50 points in just 30 days. \r\n \r\nThis service is guaranteed \r\n \r\nFor more information, check our service here \r\nhttps://www.monkeydigital.co/Get-Guaranteed-Domain-Authority-50/ \r\n \r\nthank you \r\nMike Albertson\r\n \r\nMonkey Digital \r\nsupport@monkeydigital.co', ''),
(18, '10.09.2020 19:21:18', 'Surbhi Verma', 'realsurbhi@yahoo.com', 'Why crawl?  When you can fly. Add wings to your website with the online payment Solution.', 'Dear Sir \r\n \r\nGreetings ! \r\n \r\nWhy crawl?  When you can fly. Add wings to your website with the online payment Solution. \r\n \r\nLeap ahead from your competitors and the secret to success no more secret. \r\n \r\nLast month my colleague Komal contacted you for the Payment gateway Solution for your online business, I would like to check if would be interested to proceed with same. \r\n \r\nI can offer some exciting rates. \r\n \r\nOur company https://amald.com/  offer credit card and various local payment methods (eNets, Net Banking, Alipay, CUP, SEPA, SOFORT..etc) to accept online payments on your websites. \r\n \r\nOur pricing starts from  1.5% for Local Payments and 2.5% for credit card payments, which is  typically economic from other competitor. \r\n \r\nEmail me  on  info@amald.com ; I will help you to proceed swiftly \r\nRegards \r\n \r\nSurbhi Verma.', ''),
(19, '12.09.2020 03:47:30', 'JulieCat', 'businessinterruptioninsuranceclaims@mail.com', 'Has your business been impacted by COVID-19?', 'Has your business been impacted by COVID-19? \r\n \r\nDo you have business interruption insurance and not sure if you are covered? Even if you have had your claim denied we can help as we have already had successful business interruption insurance pay-outs against COVID-19. \r\n \r\nWe strongly suggest using a third-party company like ourselves to deal with your claim as business interruption claims can be complex. We have seen many companies unsuccessful with claims or receiving less money than they are due as they do not fully understand the claims process or all the areas they are entitled to claim. \r\n \r\nOur team of insurance specialists and solicitors will check your policy wording free of charge and advise if you have a claim. If you are eligible, we can act on your behalf on a no win no fee basis. \r\n \r\nFill in our simple online form below to see if you qualify. \r\n \r\nOnline form: http://www.bi-claims.co.uk/ \r\n \r\nEmail: info@bi-claims.co.uk \r\n \r\nThanks', ''),
(20, '12.09.2020 13:13:04', 'MarilynIdeox', 'contact1@theonlinepublishers.com', 'Choose The Online Publishers for All Your Digital Marketing Needs', 'Hello, we are The Online Publishers (TOP) and want to introduce ourselves to you.  TOP is an established comprehensive global online hub.  We connect clients to expert freelancers in all facets of the world of digital marketing such as writers, journalists, bloggers, authors, advertisers, publishers, social media influencers, backlinks managers, Vloggers/video marketers and reviewers… A few of the many services we offer are content creation and placement, publishing, advertising, online translation, and social media management.  We also have two full online libraries, one of photographs and the other of eBooks and informative resources. \r\nSave money and time by using TOP services.  Rather than having to search for multiple providers of various tasks, we are a one-stop-shop.  We have all the services you will ever need right here.  For a complete list, check out our website https://www.theonlinepublishers.com \r\nTOP can help any business surge ahead of its competition and increase sales.  Join The Online Publishers today.', ''),
(21, '18.09.2020 17:53:54', 'Rachelnut', 'info@deoleodigitalpublishing.com', 'SAVING YOUR BUSINESS & YOUR LIFE !', 'Closing 100% of Your Fitness Consultations: 3 Secret Steps System Every Fitness Professional, Personal Trainer and Gym Owner Must Know To Succeed \r\nIn Our New Economy!  by Tony Deoleo \r\n \r\nOfficial trailer  https://youtu.be/wsO3rqGTT2I \r\n \r\nGet your Ebook today 50% OFF the  paperback copy price NOW! @ https://www.tonydeoleo.com', ''),
(22, '24.09.2020 23:29:03', 'James Jackson\r\n', 'no-reply@hilkom-digital.de', 'cheap monthly SEO plans', 'Hi! \r\nI have just checked argroup.az for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', ''),
(23, '03.10.2020 12:32:20', 'Marquislouts', 'info@deoleodigitalpublishing.com', 'ARE YOU WINING IN THIS  COVID-19 NEW ECONOMY?', 'HAVE YOU EVER WANTED TO LEARN HOW TO CLOSE 100% OF YOUR CONSULTATIONS & HELP YOUR COMPANY  WIN IN OUR NEW  COVID-19  ECONOMY? \r\n \r\nSEE THE OFFICIAL TRAILER:@ \r\nThe Author site https://www.tonydeoleo.com \r\n \r\n \r\nDownload your E-book Copy Now @ The Author official site: \r\nhttps://www.tonydeoleo.com \r\nAmazon : https://www.amazon.com/dp/195226359X \r\nBarns&Nobles : https://m.barnesandnoble.com/w/closing-100-of-your-fitness-consultations-tony-deoleo/1137240205', ''),
(24, '06.10.2020 15:48:31', 'AshleyTwess', 'ann1512423@protonmail.com', 'Growh your buisness', 'Hello \r\nWe are provider of email databses and sending solutions. \r\nOur lists are from all over the world approx. 2 billion emails, privat and business. \r\n \r\nWe provide also solutions to sending emails, even you want to sending 100 million emails per day. \r\n \r\nYou can send 1 million email per day from 30usd per month! \r\n \r\nIf you are interested about Our services please send us message here: \r\nmilliondata@outlook.com', ''),
(25, '06.10.2020 20:49:37', 'Mike Simon\r\n', 'no-replytarce@google.com', 'New: DA50 for argroup.az', 'Hi there \r\n \r\nIf you want to get ahead of your competition, have a higher Domain Authority score. Its just simple as that. \r\nWith our service you get Domain Authority above 50 points in just 30 days. \r\n \r\nThis service is guaranteed \r\n \r\nFor more information, check our service here \r\nhttps://www.monkeydigital.co/Get-Guaranteed-Domain-Authority-50/ \r\n \r\nN E W : \r\nDA60 is now available here \r\nhttps://www.monkeydigital.co/product/moz-da60-seo-plan/ \r\n \r\n \r\nthank you \r\nMike Simon\r\n \r\nMonkey Digital \r\nsupport@monkeydigital.co', ''),
(26, '08.10.2020 02:29:36', 'Benard Anderson', 'benarda205@gmail.com', 'Assisting companies with loans', 'Good Day, \r\n \r\nWe are global trade finance experts who specialize in providing high-end, custom financial instruments from world banks! \r\n \r\nYou will have unlimited access to our network of world banks for all of your trade finance needs. \r\n \r\nESSEX TRADE & CAPITAL LLC will successfully fulfil your commercial real estate funding needs through 2 main advantages. We bring in decades of business and financing experience and we have the capacity to fund any operation, transaction or project, regardless of size or location. \r\n \r\nWe are much more flexible in our financing solutions and are committed to helping you reduce risk while increasing your cash flow at the same time. \r\n \r\nSimple approval process \r\nFast business loans funded in just 3-5 business days \r\nLow Interest rate of 2% \r\nPrior bankruptcies accepted \r\nZero credit checks required \r\nFlexible repayment schedules \r\nCIS & KYC required for all loan applicant irrespective of location/country \r\nGrace period of 4 months for large business loans/working capital \r\nLoan Funding/Financing is not limited to any geographical location or country whatsoever. \r\n \r\nWe look forward to serving you while we grow our businesses together. \r\nFor more enquiries please call +16072611008 \r\n \r\nSign: \r\nBenard Anderson(Finance Broker/Consultant) \r\nESSEX TRADE & CAPITALS LLC \r\nTRADE FINANCE / TRADE INSURANCE', ''),
(27, '10.10.2020 18:50:00', 'WillieCow', 'turbomavro@gmail.com', 'The legendary blockchain project gives 0.001 BTC to everyone when registering', 'We invite you to take part in the grandiose blockchain project \"Turbo MMM\", which is the absolute leader in the investment market. \r\n \r\n \r\nInvestment program: \r\n \r\nInvestment currency: Bitcoin (BTC) \r\nThe investment period is 2 days. \r\nMinimum profit is 10% \r\nMinimum investment amount is 0.005 BTC \r\n   \r\nFor example: invest 0.1 bitcoins today, in 2 days you will receive 0.11 bitcoins in your personal bitcoin wallet. \r\n \r\nRe-investment is available.       \r\n \r\n \r\nThe best affiliate program - a real find for MLM agents  \r\nOur referral program is recognized by the blockchain community as the best! \r\n \r\nSign up now and get a 0.001 BTC registration bonus. \r\n \r\n \r\nRegister and get a bonus: https://bit.ly/34wNtLV \r\n \r\n', ''),
(28, '22.10.2020 08:41:36', 'JacobFib', 'accountancy.savings@yandex.com', 'SME £18 accountancy', 'Hello, \r\n \r\nWould a competitive small business accountant be of interest to your business? From just £18 per month we can provide a full online service. Get a free quote now at http://www.saving-supermarket.co.uk/ \r\n \r\nI hope you have a great day.', ''),
(29, '28.10.2020 07:10:37', 'James Ward\r\n', 'no-reply@hilkom-digital.de', 'cheap monthly SEO plans', 'Gооd dаy! \r\nI have just checked argroup.az for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', ''),
(30, '03.11.2020 18:33:02', 'Mike Fleming\r\n', 'no-replytarce@google.com', 'New: DA50 for argroup.az', 'Hi there \r\n \r\nIf you want to get ahead of your competition, have a higher Domain Authority score. Its just simple as that. \r\nWith our service you get Domain Authority above 50 points in just 30 days. \r\n \r\nThis service is guaranteed \r\n \r\nFor more information, check our service here \r\nhttps://www.monkeydigital.co/Get-Guaranteed-Domain-Authority-50/ \r\n \r\nN E W : \r\nDA60 is now available here \r\nhttps://www.monkeydigital.co/product/moz-da60-seo-plan/ \r\n \r\n \r\nthank you \r\nMike Fleming\r\n \r\nMonkey Digital \r\nsupport@monkeydigital.co', ''),
(31, '12.11.2020 00:42:37', 'Peter Dean\r\n', 'no-replykix@gmail.com', 'NEW: Get 90+/100 Google Speed Score', 'Gооd dаy! \r\n \r\nTired of investing in argroup.az without any outcome in ranks results ?? \r\n \r\nYou will never rank high while having a slow website, no matter how many agencies you hire to SEO your site. \r\nLet us make your website score between 90 to 100/100 in google developer speed score and see how your website ranks will increase instantly. \r\n \r\nThis service is guaranteed \r\n \r\nFor more information, check our service here \r\nhttps://speed-seo.net/product/google-speed/ \r\n \r\n \r\nthank you \r\nPeter Dean\r\n \r\nSpeed SEO Digital \r\nsupport@speed-seo.net', ''),
(32, '14.11.2020 09:50:36', 'Миссис Майк', 'maikereine.mmr@gmail.com', 'Пожалуйста, выслушайте меня.', 'Я работаю в Swedbank-Bank в Эстонии. У меня есть бизнес-предложение на сумму 6,2 миллиона долларов, которое вы должны передать мне из моего банка. \r\nХотя вам может быть трудно в это поверить. Мне нужно, чтобы вы помогли мне осуществить этот бизнес-проект из Эстонии в вашу страну. после завершения транзакции наш коэффициент распределения будет составлять 50/50 от общей суммы. \r\nЕсли интересно, свяжитесь со мной для получения дополнительной информации только в WhatsApp: +3726023567 \r\nПожалуйста, предоставьте мне преимущество сомнения и выслушайте меня. \r\nС Уважением, \r\nМиссис Майк.', ''),
(33, '17.11.2020 09:32:48', 'TommyCeask', 'info@eminentwebinars.com', 'UAE, KSA and Qatar Employment Laws', '— 3 Days Only — \r\n \r\nUpto 40% Discount On Our Low Prices \r\n \r\nInstructor Led Live Online Training \r\n \r\nAll Courses Delivered by European Subject Matter Experts \r\n \r\n \r\n \r\nUAE Labour Law (United Arab Emirates) \r\n \r\nKSA Labour Law (Saudi Arabia) \r\n \r\nQatar Labour Law \r\n \r\n \r\nFor Further Details https://eminentwebinars.com', ''),
(34, '28.11.2020 06:31:53', 'James Birch\r\n', 'no-reply@google.com', 'cheap monthly SEO plans', 'Hеllо! \r\nI have just checked argroup.az for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', ''),
(35, '02.12.2020 06:59:29', 'Mike Ford\r\n', 'no-replyIngerfign@gmail.com', 'Gaining Higher Domain Authority score', 'Gооd dаy! \r\n \r\nDo you want a quick boost in ranks and sales for your argroup.az website? \r\nHaving a high DA score, always helps \r\n \r\nGet your argroup.az to have a 50+ points in Moz DA with us today and rip the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nFYI: \r\nWe also give big discounts for multiple plans \r\n \r\n \r\nthank you \r\nMike Ford\r\n \r\nsupport@monkeydigital.co', ''),
(55, '21.01.2021 15:58:16', 'Mark Fazility', 'fazility@outlook.com', 'Working capital.', 'Hello, \r\n \r\nhttp://fazility.com/ provides small businesses with working capital facilities from ?40,000 to ?500,000. We can assist companies who may have struggled to raise capital in the past but currently require a flexible working capital solution. We fund quickly and can give very quick decisions - the rates start from 1.5% per month with no early repayment charge. \r\n \r\nInterested? Apply in seconds at http://fazility.com/ \r\n \r\nThanks \r\n \r\nMark', ''),
(56, '22.01.2021 08:20:28', 'James Robson', 'admin@blindspot-global.co.uk', 'Roche Rapid Antigen Test Kits x 25 - £209.00', 'As a Uk Government authorized seller of the Roche rapid antigen test kits, we have brought you the lowest price possible so businesses can keep testing their staff and stay open without worrying about the COVID-19 virus. \r\nCheckout our website today for more information, next day delivery is available for urgent supplies. \r\nhttps://blindspot-global.co.uk/', ''),
(57, '27.01.2021 04:55:19', 'Mike Johnson\r\n', 'see-email-in-message@monkeydigital.co', 'Increase sales for argroup.az', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your argroup.az website? \r\nHaving a high DA score, always helps \r\n \r\nGet your argroup.az to have a 50+ points in Moz DA with us today and rip the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nNEW: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nthank you \r\nMike Johnson\r\n \r\nsupport@monkeydigital.co', ''),
(58, '03.02.2021 16:58:44', 'Normannex', 'biclaimsmail@gmail.com', 'Business Interruption Insurance Claims Free Policy Check 700 Policies 60 Companies Listed', 'Please Check your policy for FREE \r\nCheck if you are due a payout for Business Interruption Insurance \r\nWe have the list of 700 policies from the 60 insurance companies that are due to pay out following the Supreme Court Judgement \r\nGo to our website at \r\nhttp://www.bi-claims.co.uk/ \r\nto check, just fill out our enquiry form for instant advice we will also work for you on a NO WIN NO FEE basis, we have already had many successful claims on COVID 19 \r\nAlso If your claim has been refused don’t worry we will challenge that on your behalf, we have thousands of businesses using our NO WIN NO FEE service \r\nOn average we achieve 40% more for our clients than if they were to deal with the claim by themselves \r\nWe apologise if this email is unexpected and don’t wish to upset but it is so important to check your policy as you could be due tens of thousands of pounds \r\nStay safe look after yourselves and your families \r\nKind Regards \r\nhttp://www.bi-claims.co.uk/', ''),
(59, '05.02.2021 10:14:13', 'Mike Berrington\r\n', 'no-replykix@gmail.com', 'Local SEO for more business', 'Greetings \r\n \r\nI have just took an in depth look on your  argroup.az for its Local SEO ranks and seen that your website could use a boost. \r\n \r\nWe will enhance your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nStart increasing your local visibility with us, today! \r\n \r\nregards \r\nMike Berrington\r\n \r\nSpeed SEO Digital Agency \r\nsupport@speed-seo.net', ''),
(60, '09.02.2021 06:46:57', 'Jamescrods', 'claimsbi195@gmail.com', 'Business Interruption Insurance Instant  Free Policy Check', 'Business Interruption Insurance \r\nFree Policy Check \r\n*700 Policies from 60 Insurance Companies are due a payout* \r\nFollowing the latest Supreme Court Judgement, businesses that have cover for Businesses Interruption Insurance with 60 companies are due a payout. \r\nVisit http://www.bi-claims.co.uk/  for a FREE policy check, just fill out our form for instant advice, we will also work for you on a NO WIN, NO FEE basis. \r\nWe have already had many successful claims on COVID 19. Dont worry if your claim has already been rejected, we will challenge the insurance company on your behalf. We have thousands of businesses using our NO WIN, NO FEE service. \r\nOn average, we achieve 40% more for our clients than if they were to deal with the claim by themselves. We apologize if this email is unexpected but it is vital to check your policy as you could be due tends of thousands of pounds. \r\nStay safe, look after yourselves and your families. \r\nKind regards, \r\nhttp://www.bi-claims.co.uk/ \r\n0333 344 8966', ''),
(61, '09.02.2021 12:54:01', 'conttskjn', 'grafytkakronid1985@rambler.ru', 'Рассылки ваших коммерческих предложений через формы обратной связи сайтов организаций России и СНГ. ', 'Доброго времени суток! \r\n \r\nПредлагаем рассылку ваших сообщений по контактным-формам сайтов фирм Российской Федерации.  \r\nРассылки ваших коммерческих предложений по формам обратной связи сайтов предприятий по любым доменным зонам мира на любых языках.  \r\n \r\nhttps://kontakt-forma.cn/ \r\n \r\nВаше письмо приходит на контактный  \r\n \r\nэлектронный адрес предприятия. \r\n \r\nТест: \r\nдвадцать тысяч сообщений по России на ваш электронный адрес - 1000 рублей. \r\nдвадцать тысяч сообщений по зарубежным зонам на ваш адрес электронной почты - 20 долларов. \r\nОт вас требуется адрес электронной почты, заголовок и текст письма. \r\n \r\nПредприятия РФ - 4025015 предприятий - 3500 рублей за миллион. \r\n \r\nМосква и Московская область 976829 предприятий - 5000 рублей. \r\n \r\nСанкт-Петербург и область 654194 предприятий - 5000 руб. \r\n \r\nНовые предприятия Российской Федерации зарегистрированные в 2016-2020 году 970660 доменов - 5000 рублей. \r\n \r\nНовые домены Российской Федерации, зарегистрированные 24-48 часов назад (Цикл из 15 рассылок в течение месяца). - 15000 рублей. \r\n \r\nРусскоговорящие страны, например: \r\nУкраїна 1114526 сайтов – 5000 руб \r\nBelarus 114254 сайтов – 5000 рублей \r\nKazakhstan 121391 доменных имён – 5000 рублей \r\nLatvija 96566 доменов — 5000 рублей \r\nЛитва 124182 доменов — 5000 рублей \r\nЭстония 119701 сайтов — 5000 рублей \r\nи.т.д. \r\n \r\nВсе русскоговорящие страны минус Россия 15 стран 2440822 сайтов - 10000 руб. \r\n \r\nВся Europe 44 страны 60726150 доменных имён - 60000 рублей. \r\n \r\nВесь European Union 28 стран 56752547 сайтов- 55000 руб. \r\n \r\nВся Азия 48 стран 14662004 сайтов - 15000 руб. \r\n \r\nВся Africa 50 стран 1594390 сайтов - 10000 рублей. \r\n \r\nВся Северная и Центральная Америка 35 стран 7441637 \r\n \r\nдоменов - 15000 рублей. \r\n \r\nВся Южная Америка 14 стран 5826884 доменов - 10000 рублей. \r\n \r\nРассылки по CMS: \r\n3Дэкарт 14689 сайтов 2000 рублей. \r\nAdobe CQ5 133567 доменов 3000 руб. \r\nAdvance 17589 доменных имён 2000 руб. \r\nЭдвантшоп.нет 2453 сайтов 1000 рублей. \r\nАлма 7095 доменов 1000 руб. \r\nАметис 2389 доменных имён 1000 рублей. \r\nАмиро 1794 сайтов 1000 руб. \r\nAngora 20357 доменных имён 2000 руб. \r\nAVS 1369 сайтов 1000 руб. \r\nБибиПресс 1487 доменов 1000 руб. \r\nBESTWEB 2699 доменных имён 1000 рублей. \r\nBigCommerce 78257доменных имён - 2000 рублей. \r\nBitrix 278751 сайтов 3000 рублей. \r\nБлогер 658267 сайтов 3000 рублей. \r\nBlogspot 279865 доменных имён 3000 рублей. \r\nBuddyPress 51477 доменных имён 2000 рублей. \r\nBurning Board 4659 доменных имён 1000 руб. \r\nCatalyst Web 11689 доменов 2000 рублей. \r\nClassiPress 11796 доменов 2000 рублей. \r\nCMSimple 11052 доменных имён 1000 рублей. \r\nКонкретэ5 39121 сайтов 2000 руб. \r\nContao 110897 доменных имён 3000 руб. \r\nКонтенидо 5096 сайтов 1000 рублей. \r\nConvio 2268 сайтов 1000 рублей. \r\nCoppermine Photo 1296 сайтов 1000 руб. \r\nЦскарт 1180доменных имён 1000 руб. \r\nCubeCart 1062 доменов 1000 рублей. \r\nDatalife Engine 29438 доменных имён 2000 рублей. \r\nDede 230589 доменных имён 5000 рублей. \r\nDedeEIMS 96068 доменов 2000 руб. \r\nDIAFAN 4058 доменов 1000 рублей. \r\nDiscuz 47962 сайтов 2000 рублей. \r\nДжанго 71167 сайтов 2000 руб. \r\nДокувики 9588 доменов 1000 руб. \r\nДотнетнук 82964 доменных имён 2000 рублей. \r\nDrupal 978298 доменов 5000 руб. \r\nEasyBlog 1165978 доменных имён 5000 руб. \r\nEPiServer 29876 доменных имён 2000 рублей. \r\nЭкспресионэнжин 1769823 доменных имён 8000 рублей. \r\nЕэз паблиш 5367 доменных имён 1000 руб. \r\nФ 9356 сайтов 1000 руб. \r\nФайрбоард 1567 доменных имён 1000 руб. \r\nFlexbe 15072 доменных имён 1000 руб. \r\nДженерал блогс 2067 доменов 1000 рублей. \r\nGetSimple 23094 сайтов 2000 руб. \r\nHost 6871 доменов 1000 рублей. \r\nХост CMS 5042 доменных имён 1000 руб. \r\nHubSpot 31762 доменов 2000 руб. \r\ni 9438 сайтов 1000 рублей. \r\nИмэйдж 1368 сайтов 1000 рублей. \r\nInSales 11081 сайтов 1000 руб. \r\nИнстант CMS 4136 доменов 1000 рублей. \r\nInteractiveBBS 32367 сайтов 2000 руб. \r\nИнвизион Повер Боард 2430 доменных имён 1000 руб. \r\nАйпибоард 2266 доменных имён 1000 руб. \r\nАйти 15189 доменных имён 2000 рублей. \r\njforum 1056 сайтов 1000 рублей. \r\njobberBase 3387 доменов 1000 рублей. \r\nДжумла 1906994 доменных имён 10000 руб. \r\nKoobi 3722 доменных имён 1000 рублей. \r\nЛайфрей 5137 сайтов 1000 руб. \r\nMade Simple 20567 доменов 2000 рублей. \r\nMagento 369447 сайтов 3000 рублей. \r\nMediaMaxScript 103896 сайтов 3000 рублей. \r\nМедиавики 41468 сайтов 2000 рублей. \r\nМайкрософт эапоинт 13198 доменных имён 2000 руб. \r\nМод икс 64023 доменных имён 2000 рублей. \r\nМудл 8195 доменных имён 1000 руб. \r\nMovable Type 9171 сайтов 1000 руб. \r\nМайбэбэ 4367 доменов 1000 руб. \r\nМайюпибэ 3397 сайтов 1000 руб. \r\nНетКэт 6636 сайтов 1000 рублей. \r\nNG 18356 сайтов 2000 руб. \r\nNING 3687 сайтов 1000 руб. \r\nNopCommerce	3892 доменов 1000 руб. \r\nOpen 5916 доменных имён 1000 руб. \r\nОпенКарт 415575 доменов 3000 рублей. \r\nОпэнцмс 5916 сайтов 1000 руб. \r\nOsclass 4652 доменных имён 1000 руб. \r\nosCommerce 68468 доменов 2000 рублей. \r\nOUR 3096 сайтов 1000 руб. \r\nOXID eShop 12200 доменных имён 2000 руб. \r\nOxwall 6800 доменных имён 1000 руб. \r\nПаралельс плеск сайтбилдер 174216 доменных имён 3000 рублей. \r\nПшп линк 2298 сайтов 1000 руб. \r\nphp 14367 доменов 2000 руб. \r\nphpBB 20045 сайтов 1000 рублей. \r\nPHP-Fusion 2596 сайтов 1000 руб. \r\nПшпмелоди 2365 доменных имён 1000 рублей. \r\nPHP-Nuke 2489 доменных имён 1000 рублей. \r\nPHPShop 2667 сайтов 1000 рублей. \r\nPHPWeb 29789 доменов 2000 рублей. \r\nПшпвинд 4032 доменных имён 1000 рублей. \r\nPlone 84962 доменов 2000 руб. \r\nПуверизи 1697 доменных имён 1000 руб. \r\nПресташоп 328287 доменов 2000 рублей. \r\nКвэщинтуансве 5598 доменных имён 1000 руб. \r\nR 296498 сайтов 3000 руб. \r\nРидискрипт 6487682 доменов 3000 рублей. \r\nЭсбилдер 394367 доменов 3000 рублей. \r\nШопифи 2343709 сайтов 3000 рублей. \r\nШоутбокс 145564 доменных имён 3000 руб. \r\nSilverStripe 31721 доменов 2000 руб. \r\nSimpla 17429 доменных имён 1000 руб. \r\nSitecore 74861 доменных имён 2000 рублей. \r\nSitefinity	4183 доменных имён 1000 рублей. \r\nЭсэмэф 8111 сайтов 1000 рублей. \r\nСоциалгоу 54267 доменных имён 2000 руб. \r\nСпайп 28269 сайтов 2000 рублей. \r\nСквэаспэйс 1098231 доменов 5000 руб. \r\nСторелэнд 8257 доменов 1000 руб. \r\nSupeSite 12367 сайтов 2000 руб. \r\nTextpattern,Текстпатерн 882 доменных имён 1000 рублей. \r\nTikiWiki 1446 сайтов 1000 руб. \r\nTilda,Тилда 47396 сайтов 2000 руб. \r\nТамбл 302357 сайтов 3000 руб. \r\nТайпо три845009 доменных имён 3000 руб. \r\nУмбрако 146064 доменных имён 3000 рублей. \r\nЮМИ CMS 13191 доменов 2000 рублей. \r\nVamShop 1737 доменов 1000 рублей. \r\nvBulletin 14460 доменов 1000 руб. \r\nВолюзион 16006 доменных имён 1000 рублей. \r\nWallpaperSiteScript 2811 сайтов 1000 руб \r\nВибли 191753 сайтов 3000 рублей. \r\nWix 3379081 доменных имён 10000 руб. \r\nWooCommerce 4459525 доменных имён 15000 руб. \r\nWordpress 35354537 доменов 30000 рублей. \r\nХенфоро 21105 доменов 1000 руб. \r\nХупс 20467 доменных имён 2000 рублей. \r\nЭкспресэнджин 8565 доменных имён 1000 руб. \r\nЗенкарт 26524 доменов 1000 рублей. \r\n \r\nВыборки по отраслям и сферам деятельности РФ: \r\nB2B uslugi, Автомобили, Avtoservis, Auto products, \r\n \r\nБезопасность, Biznes, Computers and Internet, Красота, Culture and art, Medicine and Pharmacy, Mesta i topograficheskie obekty,Science and education, \r\n \r\nОбразование, Public catering, Общество, Otdyh i \r\n \r\nturizm, Продукты, Производство и поставки, Промышленные товары, Razvlecheniya, Реклама и полиграфия, Ремонт стройка, Семья дети домашние животные, Спецмагазины, Спорт, Reference Information Systems, Средства массовой \r\n \r\nинформации, Строительство и недвижимость, Telekommunikacii i svyaz, Home and garden, Transport and transportation, Uslugi \r\n \r\nНапример: \r\nИнтернет-магазины РФ 237462 сайтов — 5000 рублей. \r\nИнтернет магазины 14 стран бывшего СССР 44840  сайтов— 5000 рублей. \r\nИнтернет-магазины Весь мир 3516251 доменов — 10000 руб. \r\nПоставщики и оптовики РФ 52678 доменов — 5000 рублей. \r\n\"Услуги 1С\" 3108 доменов — 5000 рублей. \r\nСтудии изготовление лендингов РФ и СНГ 5852 сайтов — 5000 руб. \r\nSEO агенства Россия и СНГ 50949 доменов — 5000 рублей. \r\nСтроительство и Недвижимость Россия 360404 доменных имён — 5000 рублей. \r\nСтроительство Недвижимость Москва 170408 доменных имён — 5000рублей. \r\nТранспорт и перевозки России 117813 доменов — 5000 рублей. \r\nАвто РФ 572901 сайтов -5000 рублей. \r\nМедицина и фармацевтика РФ 380282 сайтов - 5000руб. \r\nМебель и мебельная фурнитура Москва 147267 сайтов — 5000рублей. \r\nМедицина красота в Москве 198749 доменов — 5000руб. \r\nТехцентры России 75463 сайтов - 5000рублей. \r\nОхрана 40867 доменных имён Россия - 5000рублей. \r\nГосударственные органы всего мира 354924 доменных имён — 5000рублей. \r\nИнтернет и компьютеры 162418 доменов Россия - 5000руб. \r\nКрасота Россия 157000 доменов - 5000руб. \r\nОбразование Россия 115256 сайтов - 5000рублей. \r\nРестораны, кафе, столовые России 90237 доменов - 5000рублей. \r\nОтдых и развлечения Москва 257696 сайтов — 5000руб. \r\nПродукты Россия 189221 доменов- 5000рублей. \r\nПроизводство и поставки Россия 135081 сайтов - 5000рублей. \r\nПолиграфия и Реклама Россия 154036 доменов - 5000рублей. \r\nСпорт Россия 89564 доменов - 5000руб. \r\nТелекоммуникации и связь 18548 сайтов Россия - 5000руб. \r\nТуризм и отдых Россия 256741 доменных имён - 5000руб. \r\nХостинг Весь мир 1499203 доменных имён - 1000рублей. \r\nИмпорт-Экспорт Россия СНГ 37795 сайтов - 5000руб. \r\n \r\nРегионы России: \r\nАбакан и Республика Хакасия 37227доменных имён - 5000рублей. \r\nАнадырь и Чукотский автономный округ 2008доменов - 5000рублей. \r\nАрхангельск и Архангельская область 40594доменных имён - 5000рублей. \r\nАстрахань и Астраханская область 40084доменов - 5000руб. \r\nБарнаул и Алтайский край 64123доменов - 5000руб. \r\nБелгород и Белгородская область 38257сайтов - 5000руб. \r\nБиробиджан и Еврейский автономный округ 3487доменных имён - 5000руб. \r\nАмурская область и Благовещенск 24790сайтов - 5000рублей. \r\nБрянская область и Брянск 32499сайтов - 5000руб. \r\nВеликий Новгород и Новгородская область 18849сайтов - 5000руб. \r\nПриморский край и Владивосток 50051доменов - 5000рублей. \r\nВладикавказ и Республика Северная Осетия 8987доменов - 5000руб. \r\nВладимирская область и Владимир 62252доменов - 5000рублей. \r\nВолгоградская область и Волгоград 78537сайтов - 5000рублей. \r\nВологда и Вологодская область 52476сайтов - 5000рублей. \r\nВоронежская область и Воронеж 28782доменных имён - 5000руб. \r\nГорно-Алтайск и Республика Алтай 49027доменов - 5000рублей. \r\nГрозный и Чеченская Республика 7829доменных имён - 5000руб. \r\nЕкатеринбург и Свердловская область - 119920доменных имён - 5000руб. \r\nИвановская область и Иваново 43750доменных имён - 5000руб. \r\nРеспублика Удмуртия и Ижевск 38255доменов - 5000рублей. \r\nРеспублика Марий Эл и Йошкар-Ола 10431доменов - 5000руб. \r\nИркутск и Иркутская область 64484доменных имён — 5000рублей. \r\nКазань и Республика Татарстан - 121992доменов - 5000рублей. \r\nКалининградская область и Калининград 32568сайтов - 5000рублей. \r\nКалужская область и Калуга 36623доменов - 5000руб. \r\nКемеровская область и Кемерово 46708доменов - 5000 руб. \r\nКировская область и Киров 40374сайтов - 5000руб. \r\nКостромская область и Кострома 19720сайтов - 5000рублей. \r\nКраснодарский край Краснодар 163489сайтов - 5000рублей. \r\nКрасноярск и Красноярский край 89698сайтов - 5000руб. \r\nКурганская область и Курган 36560доменных имён - 5000рублей. \r\nКурская область и Курск 16384сайтов - 5000руб. \r\nКызыл и Республика Тыва 1486доменов - 5000руб. \r\nЛипецк и Липецкая область 20003доменов - 5000рублей. \r\nМагаданская область и Магадан 3785сайтов - 5000руб. \r\nРеспублика Ингушетия и Магас 2204сайтов - 5000руб. \r\nМайкоп и Республика Адыгея 3976доменов - 5000руб. \r\nМахачкала и Республика Дагестан 17161сайтов - 5000рублей. \r\nМосква и Московская область – 976829 сайтов - 5000руб. \r\nМурманская область и Мурманск 26592 доменных имён - 5000руб. \r\nНальчик и Республика Кабардино-Балкария 3119 доменных имён - 5000рублей. \r\nНенецкий автономный округ и Нарьян-Мар 1150доменов - 5000руб. \r\nНижегородская область и Нижний Новгород 119897сайтов - 5000руб. \r\nНовосибирск и Новосибирская область 163292доменов - 5000руб. \r\nОмск и Омская область 127682доменных имён - 5000рублей. \r\nОрел и Орловская область 24666доменных имён - 5000рублей. \r\nОренбургская область и Оренбург 26801доменов - 5000руб. \r\nПенза и Пензенская область 22380сайтов - 5000руб. \r\nПермь и Пермский край 60192доменов - 5000руб. \r\nРеспублика Карелия и Петрозаводск 15971сайтов - 5000рублей. \r\nКамчатский край и Петропавловск-Камчатский 14648доменов - 5000рублей. \r\nПсков и Псковская область 14515доменов - 5000руб. \r\nРостов-На-Дону и Ростовская область 30828сайтов - 5000руб. \r\nРязанская область и Рязань 12258сайтов - 5000руб. \r\nСалехард и Ямало-Ненецкий автономный округ 3759доменных имён - 5000рублей. \r\nСамара и Самарская область 124452доменных имён — 5000руб. \r\nЛенинградская область и Санкт-Петербург – 654194доменных имён - 5000рублей. \r\nСаранск и Республика Мордовия 4718доменов - 5000руб. \r\nСаратов и Саратовская область 20999сайтов - 5000рублей. \r\nСевастополь и Республика Крым 49444доменных имён - 5000руб. \r\nСмоленская область и Смоленск 6728сайтов - 5000руб. \r\nСтаврополь и Ставропольской край 53925сайтов -5000рублей. \r\nРеспублика Коми и Сыктывкар 27979доменов - 5000руб. \r\nТамбовская область и Тамбов 7070сайтов - 5000руб. \r\nТверская область и Тверь 8752доменов - 5000рублей. \r\nТомск и Томская область 14945сайтов - 5000рублей. \r\nТульская область и Тула 16679доменов - 5000руб. \r\nТюмень и Тюменская область 91044доменов - 5000руб. \r\nРеспублика Бурятия и Улан-Удэ 11339сайтов - 5000руб. \r\nУльяновск и Ульяновская область 11786доменных имён - 5000руб. \r\nУфа и Республика Башкортостан 68615доменных имён - 5000руб. \r\nХабаровский край и Хабаровск 78835доменов - 5000рублей. \r\nХанты-Мансийский автономный округ и Ханты-Мансийск 56782сайтов - 5000руб. \r\nЧувашская Республика и Чебоксары 89062доменных имён - 5000руб. \r\nЧелябинск и Челябинская область,Челябинская область и Челябинск 108852доменов - 5000руб. \r\nЧеркесск и Республика Карачаево-Черкессия 1629сайтов - 5000рублей. \r\nЧита и Забайкальский край 16891доменных имён - 5000рублей. \r\nРеспублика Калмыкия и Элиста 17892доменных имён - 5000руб. \r\nСахалинская область и Южно-Сахалинск 16507доменных имён - 5000руб. \r\nЯкутск и Республика Саха 29226сайтов - 5000руб. \r\nЯрославль и Ярославская область 89341доменных имён - 5000рублей. \r\n \r\nБазы для рассылок: \r\nОрганизации и Предприятия из сервисов Yandex и Google карт собранные по ОКАТО: 966 гор., 42187/108072 крупных/мелких населённых пунктов \r\nРФ. \r\nПредприятия и организации Российской Федерации из: Yellow pages, Double GIS, Ros-bis, Actinfo, Allinform, Btk-online, \r\nБигфоунбук, MBTG, Gdetomesto, Gdebiz, E-adres, B2B-russia, Zakazrf, Sam5, Фолиант, Ярмэп, Topplan, Tel09, Spravochnik-09, EGTS, СПР,  \r\nИнтервеб.спб, Московфирма, ЕГРЮЛ, Дата.мос, Мосгид, Мск.справкер и др. \r\nБазы WHOIS доменов всех стран мира. \r\nВы можете приобрести наши базы отдельно от рассылки по запросу. \r\n \r\nP.S. \r\nПожалуйста не отвечайте на это сообщение со своего ящика \r\nэлектронной почты, так как оно создано автоматически и не дойдёт до нас! \r\nИспользуйте для связи контакт-форму <a href=https://kontakt-forma.cn/>рассылка по формам контактов</a>', ''),
(62, '10.02.2021 12:12:23', 'BI Claims', 'biclaimsmail2@gmail.com', '*Notice to all UK Companies with Business Interruption Insurance*', '*Notice to all UK Companies with Business Interruption Insurance* \r\nFollowing the latest Supreme Court Judgement, businesses that have cover for Businesses Interruption Insurance with 60 companies are due a payout. We have the list of over 700 policies that fall under this category, just visit https://www.bi-claims.co.uk/policy-checker and fill out our form for a free policy check and instant advice. \r\nDont worry if your claim has already been rejected, our expert legal team is challenging insurers on behalf of our clients. We have thousands of businesses using our NO WIN, NO FEE service. \r\nOn average, we achieve a 40% higher payout for our clients than if they were to deal with the claim by themselves. We apologize if this email is unexpected, but it is vital to check your policy as you could be due a huge payout. Thousands of businesses have been affected by Covid-19, and we believe in doing the right thing by giving businesses that have been affected a good fighting chance during these difficult times. \r\nStay safe, \r\nKind regards, \r\nBI Claims \r\nhttp://www.bi-claims.co.uk/ \r\n0333 344 8966', '');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `gallery`
--

CREATE TABLE `gallery` (
  `id` int(2) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `photo` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `photo`) VALUES
(11, 'Logo', '50e1a72650088d740a6dd35970594bd2.jpg'),
(12, 'ARGCS', '8086dec885950aed1387ca1f40c7b1d2.jpg'),
(13, 'ARGCS-2', '38b876d96efc317ec2ab97f3006d71a7.jpg'),
(15, 'QS', '50a61e35cf6db21131d8cfd232081f58.png'),
(16, 'AR GROUP_Logo', '6785f4f14ce5881aaedaa9daf498f51f.jpeg'),
(17, 'AR GROUP_Logo', '764960dc92b40a26233c549f81d46774.jpeg'),
(18, 'ARGROUP.AZ', '28eef0d11b7efde8bb65b9b08b12c0e8.jpeg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `join_us`
--

CREATE TABLE `join_us` (
  `id` int(11) NOT NULL,
  `date` varchar(50) COLLATE utf8_bin NOT NULL,
  `name` varchar(60) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(60) COLLATE utf8_bin NOT NULL,
  `birthday` varchar(50) COLLATE utf8_bin NOT NULL,
  `vezife` varchar(50) COLLATE utf8_bin NOT NULL,
  `staj` varchar(10) COLLATE utf8_bin NOT NULL,
  `note` text COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `join_us`
--

INSERT INTO `join_us` (`id`, `date`, `name`, `lastname`, `birthday`, `vezife`, `staj`, `note`, `phone`, `email`) VALUES
(1, '15.01.2020 12:24:54', 'Rahul', 'Alizada', '33333', 'vezife', '1 - 3 il', 'qeyd', '0516451606', 'ekranmedia.az@gmail.com'),
(2, '15.01.2020 12:31:17', 'Rahul', 'Alizada', '33333', 'vezife', '1 - 3 il', 'qeyd', '0516451606', 'ekranmedia.az@gmail.com');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `komanda`
--

CREATE TABLE `komanda` (
  `id` int(11) NOT NULL,
  `date` varchar(50) COLLATE utf8_bin NOT NULL,
  `full_name` varchar(120) COLLATE utf8_bin NOT NULL,
  `vezife` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `phone` varchar(50) COLLATE utf8_bin NOT NULL,
  `photo` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `komanda`
--

INSERT INTO `komanda` (`id`, `date`, `full_name`, `vezife`, `email`, `phone`, `photo`) VALUES
(3, '06.02.2020 02:27:14', 'Ramin Mustafayev', 'Executive Director', 'RMustafayev@argroup.com.az', '', ''),
(4, '06.02.2020 02:27:42', 'Parviz Mammadli', 'Main Engineer of the Company', 'PMammadli@argroup.com.az', '', '');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `lang`
--

CREATE TABLE `lang` (
  `id` int(11) NOT NULL,
  `az` text COLLATE utf8_bin NOT NULL,
  `en` text COLLATE utf8_bin NOT NULL,
  `ru` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `lang`
--

INSERT INTO `lang` (`id`, `az`, `en`, `ru`) VALUES
(1, 'Salam', 'Hello', 'Privet'),
(2, 'Ana Səhifə', 'Home', 'Дом'),
(3, 'Haqqımızda', 'About us', 'О нас'),
(4, 'Layihələr', 'Projects', 'Проекты'),
(5, 'Davam edən layihələr', 'Ongoing Projects', 'Текущие проекты'),
(6, 'Tamamlanmış layihələr', 'Completed Details', 'Завершенные проекты'),
(7, 'Xəbərlər', 'News', 'Новости'),
(8, 'Şəkillər', 'Photos', 'Фотография'),
(9, 'Videolar', 'Videos', 'Видео'),
(10, 'Əlaqə', 'Contact', 'Контакты'),
(11, 'Sonuncu Layihələr', 'Last projects', 'Последние проекты'),
(12, 'Sonuncu davam edən və ya tamamlanmış layihələrimiz ', 'Our ongoing or last projects', 'Наши текущие или завершенные проекты'),
(13, 'Digər xidmətlərimiz', 'Other services', 'Другие услуги'),
(14, '', '', ''),
(15, 'Yeniliklərimizə və təkliflərimizə abunə olun', 'Subscribe to our lastest news', 'Подпишитесь к нашим последним новостям'),
(16, 'Abunə ol', 'Subscribe', 'Подписаться'),
(17, 'E-poçtunuzu yazın', 'Enter email address', 'Введитте электронную почту'),
(18, 'Uğurla Ubunə oldunuz.', 'You have successfully subscribe', 'Вы удачно подписались'),
(19, 'Bizi izləyin', 'Follow us', 'Следите за нашими новостями'),
(20, 'Ən son xəbərlərimiz', 'Our lastest news', 'Наши последние новости'),
(21, '', '', ''),
(22, 'Ünvanlarımız', 'Locations', 'Местоположение'),
(23, 'Bizim ünvanlarımız', 'Our locations', 'Наши адреса'),
(24, 'Adınız', 'Name', 'Имя'),
(25, 'E-poçtunuz', ' Email', 'Электронная почта'),
(26, 'Mövzu', 'Subject', 'Тема'),
(27, 'Mesajınız', 'Your message', 'Сообщения'),
(28, 'Göndər', 'Send', 'Отправить'),
(29, 'Mesajınız uğurla göndərildi', 'Your message is sent succesfully', 'Ваше сообщение удачно отправилось'),
(30, 'Bütün xanaları doldurun', 'Fill in all gaps', 'Заполните все окна'),
(31, 'geri', 'back', 'назад'),
(32, 'Niyə bizi seçməlisiniz?', 'WHY SHOULD CHOOSE US?', 'ПОЧЕМУ ВЫ ДОЛЖНЫ ВЫБРАТЬ НАС?'),
(33, 'Bizim layihələrimiz', 'OUR PROJECTS', 'НАШИ ПРОЕКТЫ'),
(34, 'Hazırda uzərində işlədiyimiz və tamamladığımız layihələrlə tanış olun', 'Look at the completed projects and the projects that we are currently working on', 'Посмотрите на завершённые прокты и на проекты, над которыми в настоящее время мы работаем'),
(35, 'TAMAMLANIB', 'COMPLETED', 'ЗАВЕРШЕННЫЕ'),
(36, 'DAVAM EDİR', 'ONGOING', 'ТЕКУЩИЕ'),
(37, 'HAMISI', 'ALL', 'ВСЕ'),
(38, 'Layihə məlumatları', 'PROJECT DETAILS', 'ДЕТАЛИ ПРОЕКТА'),
(39, 'Reytinq', 'Raiting', 'РЕЙТИНГ'),
(40, 'Status', 'Status', 'Статус'),
(41, 'Müştəri', 'Customer', 'Клиент'),
(42, 'Başlama tarixi', 'Start date', 'Дата начала'),
(43, 'Bitmə tarixi', 'Finish date', 'Дата окончания'),
(44, 'Davamını oxu', 'Read more', 'Читать больше'),
(45, 'Xəbər axtar', 'Search', 'Искать'),
(46, 'Ən çox oxunanlar', 'The most read', 'Самые читавшиеся '),
(47, 'Xəbər kateqoriyaları', 'News\' categories', 'Категории новостей'),
(48, 'Abunəlik', 'Subscribe', 'Подписаться'),
(49, 'Yeni paylaşımlardan dərhal xəbərdar olmaq üçün abunə olun', 'Subscribe for the latest news', 'Подпишитесь для последних новостей'),
(50, '>', '>', '>'),
(51, 'Etiketlər', 'Tags', 'Теги'),
(52, 'xəbər', 'news', 'новость'),
(53, 'Layihələr', 'Projects', 'Проекты'),
(54, 'Əlavə et', 'Add', 'Добавить'),
(55, 'Adı', 'Name', 'Имя'),
(56, 'Müştəri', 'Customer', 'Клиент'),
(57, 'Başlama tarixi', 'Start date', 'Дата начала'),
(58, 'Bitmə tarixi', 'Finish date', 'Дата окончания'),
(59, 'Status', 'Status', 'Статус'),
(60, 'Layihə açıqlaması AZ', 'Project information AZ', 'Информация проекта AZ'),
(61, 'Layihə açıqlaması EN', 'Project information EN', 'Информация проекта EN'),
(62, 'Layihə açıqlaması RU', 'Project information RU', 'Информация проекта RU'),
(63, 'Layihənin adı', 'Project name', 'Название проекта'),
(64, 'Layihə açıqlaması 2 AZ', 'Project information 2 AZ', 'Информация Проекта 2 AZ'),
(65, 'Layihə açıqlaması 2 EN', 'Project information 2 EN', 'Информация Проекта 2 EN'),
(66, 'Layihə açıqlaması 2 RU', 'Project information 2 RU', 'Информация Проекта 2'),
(67, 'Proyekt nömrəsi', 'Project id', 'Номер проекта'),
(68, 'Yadda saxla', 'Save', 'Сохранить'),
(69, 'Pəncərəni bağla', 'Close the window', 'Закрыть окно'),
(70, 'Bu layihəni silmək istədiyinizdən əminsiniz?', 'Are you sure for deleting your project', 'Вы уверены, что хотите удалить проект?'),
(71, 'SİL', 'DELET', 'УДАЛИТЬ'),
(72, 'LƏĞV ET', 'CANCEL', 'ОТМЕНИТЬ'),
(73, 'Proyekt əlavə et', 'Add project', 'Добавить проект'),
(74, 'Müştərilər', 'Customers', 'Клиенты'),
(75, 'Müştəri adı', 'Customer name', 'Имя клиента'),
(76, 'Müştəri kodu', 'Customer ID', 'Номер клиента'),
(77, 'Müştəri loqosu', 'Customer logo', 'Логотип клиента '),
(78, 'Kateqoriya', 'Category', 'Категория'),
(79, 'Tarix', 'Date', 'Дата'),
(80, 'Başlıq', 'Heading', 'Заголовок'),
(81, 'Oxunma sayı', 'Number of readings', 'Количество чтений'),
(82, 'Başlıq AZ', 'Heading AZ', 'Заголовок AZ'),
(83, 'Başlıq EN', 'Heading EN', 'Заголовок EN'),
(84, 'Başlıq RU', 'Heading RU', 'Заголовок RU'),
(85, 'Açıqlama AZ', 'Information AZ', 'Информация AZ'),
(86, 'Açıqlama EN', 'Information EN', 'Информация EN'),
(87, 'Açıqlama RU', 'Information RU', 'Информация RU'),
(88, 'Xəbər kodu', 'Code of news', 'Код новостей'),
(89, 'Xəbərlər', 'News', 'Новости'),
(90, 'Xəbər şəkli', 'Picture of news', 'Изображения новостей'),
(91, 'Xəbər əlavə et', 'Add news', 'Добавить новости'),
(92, 'Xəbərin kateqoriyası', 'Category of the news', 'Категория новостей'),
(93, 'Xəbər kateqoriyaları', 'Categories of the news', 'Категории новостей'),
(94, 'AZ', 'AZ', 'AZ'),
(95, 'EN', 'EN', 'EN'),
(96, 'RU', 'RU', 'RU'),
(97, 'Kateqoriya kodu', 'ID of category', 'Номер категории'),
(98, 'Müştəri əlavə et', 'Add a customer', 'Добавить клиент'),
(99, 'Xəbər kateqoriyası əlavə et', 'Add the category of the news', 'Добавить категорию новостей'),
(100, 'Ünvan əlavə et', 'Add an address', 'Добавить адрес'),
(101, 'Ölkə', 'Country', 'Страна'),
(102, 'Ünvan', 'Address', 'Адрес'),
(103, 'Telefon nömrəsi', 'Phone number', 'Мобильный номер'),
(104, 'Ünvan kodu', 'ID of address', 'Номер адреса'),
(105, 'Abunəliklər', 'Subscribers', 'Подписки'),
(106, 'Tarix', 'Date', 'Дата'),
(107, 'E-poçt', 'E-mail', 'Электронная почта'),
(108, 'Haradan', 'From', 'Откуда'),
(109, 'Xəbərlərə abunə oldunuz.', 'Subscribed to news', 'Подписались на новости'),
(110, 'Bu abunəçini silmək istədiyinizdən əminsiniz', 'Are you sure for deleting this subscriber', 'Вы уверены, что хотите удалить этого подписчика'),
(111, 'Bu xəbəri silmək istədiyinizdən əminsiniz', 'Are you sure for deleting these news', 'Вы уверены, что хотите удалить это новость'),
(112, 'Bu müştərini silmək istədiyinizdən əminsiniz', 'Are you sure for deleting this customer', 'Вы уверены, что хотите удалить этого клиента'),
(113, 'Bu ünvanı silmək istədiyinizdən əminsiniz', 'Are you sure for deleting this address', 'Вы уверены, что хотите удалить этот адрес'),
(114, 'Xidmət adı AZ', 'Name of the service AZ', 'Название услуги AZ'),
(115, 'Xidmət adı EN', 'Name of the service EN', 'Название услуги EN'),
(116, 'Xidmət adı RU', 'Name of the service RU', 'Название услуги RU'),
(117, 'Xidmət açıqlaması AZ', 'Information of the service AZ', 'Информация услуги AZ'),
(118, 'Xidmət açıqlaması EN', 'Information of the service EN', 'Информация услуги EN'),
(119, 'Xidmət açıqlaması RU', 'Information of the service RU', 'Информация услуги RU'),
(120, 'Xidmətlərimiz', 'Services', 'Услуги'),
(121, 'Bu xidməti silmək istədiyinizdən əminsiniz', 'Are you sure for deleting this service', 'Вы уверены, что хотите удалить эту услугу'),
(122, 'Ana səhifə quraşdırmaları', 'Installation of the Home', 'Установка главной страницы'),
(123, 'Əlaqə məlumatları', 'Contact information', 'Информация связей'),
(124, 'Ünvan', 'Address', 'Адрес'),
(125, 'Telefon nömrəsi', 'Phone number', 'Мобильный номер'),
(126, 'E-poçt', 'E-mail', 'Электронная почта'),
(127, ' Ünvan qeydi', 'Registration of the address', 'Регистрация адреса'),
(128, 'Zəng üçün saat aralığı', 'The period of time for calling', 'Интервал времени для звонка'),
(129, 'İnformasiya', 'Information', 'Информация'),
(130, 'Siz burdasınız', 'You are here', 'Вы тут'),
(131, 'JPG və ya PNG formatında bir şəkil əlavə olunmalıdır.', 'You must add the photo in JPG or PNG format.', 'Вы должны добавить фотографию в формате JPG или PNG.'),
(132, 'Bu kateqoriyada elan yoxdur.', 'There are no announcements in this category.', 'Нет объявлений в этой категории.'),
(133, 'Etiket', 'Tag', 'Этикет'),
(134, 'Etiket AZ', 'Tag AZ', 'Этикет AZ'),
(135, 'Etiket EN', 'Tag EN', 'Этикет EN'),
(136, 'Etiket RU', 'Tag Ru', 'Этикет RU'),
(137, 'Çıxış', 'Logout', 'Выход'),
(138, 'Haqqımızda məlumatlar', 'About us', 'О нас'),
(139, 'Şirkətin sloganı', 'Company tagline', 'Слоган компании'),
(140, 'Keçid linki', 'Link access ', 'Доступ по ссылке'),
(141, 'Şirkət haqqında açıqlama', 'İnformation about the company', 'Информация о компании'),
(142, 'Video linki', 'Video link', 'Ссылка на видео'),
(143, 'Mesaj', 'Message', 'Сообщения'),
(144, 'Bu mesajı silmək istədiyinizdən əminsiniz', 'Are you sure you want to delete this message', 'Вы уверены, что хотите удалить это сообщение'),
(145, 'Onlayn müraciətlər', 'Online applications', 'Онлайн заявки'),
(146, 'Komanda', 'Staff', 'Команда'),
(147, 'Tam adı', 'Full name', 'Полное имя'),
(148, 'Vəzifə', 'Responsibility ', 'Обязанность '),
(149, 'Mükafatlarımız', 'Awards', 'Награды'),
(150, 'Kimdən', 'From', 'От кого'),
(151, 'Mükafat tipi', 'Award type', 'Тип награды'),
(152, 'PDF Fayl', 'PDF file', 'Файл PDF'),
(153, 'Silmək istədiyinizdən əminsiniz?', 'Are you sure you want to delete?', '	 Вы уверены, что хотите удалить?'),
(154, 'Yalnız PDF fayl qəbul edilir', 'Only PDF file accepted ', 'Принимается только файл PDF'),
(155, 'Mükafatlar', 'Awards', 'Награды'),
(156, 'Biz kimik', 'Who are we', 'Кто мы'),
(157, 'Missiyamız', 'Our mission ', 'Наша миссия'),
(158, 'Brendimiz', 'Our brend', 'Наш бренд'),
(159, 'İdarə heyətimiz', 'Management staff', 'Управляющий персонал'),
(160, 'Soyadınız', 'Surname', 'Фамилия'),
(161, 'İş təcrübəsi', 'Work experience ', 'Опыт работы'),
(162, 'Doğum günü', 'Date of birth ', 'Дата рождения'),
(163, 'Vəzifə', 'Responsibility', 'Обязанность'),
(164, 'Qeyd (varsa)', 'Note (if any)', 'Заметка (если есть)'),
(165, 'E-poçt (varsa)', 'E-mail (if any)', 'Электронная почта (если есть)'),
(166, 'il', 'year', 'год'),
(167, 'ay', 'month', 'месяц'),
(168, 'Müraciətiniz göndərildi', 'Your application has been sent', 'Ваша заявка отправлена'),
(169, 'İş müraciətləri', 'Work applications', 'Рабочие заявления'),
(170, 'Şifrəni yenilə', 'Update password ', 'Обновить пароль'),
(171, 'Köhnə şifrə', 'Old password ', 'Старый пароль'),
(172, 'Yeni şifrə', 'New password', 'Новый пароль'),
(173, 'Yeni şifrə təkrarı', 'Repeat new password', 'Повторите новый пароль'),
(174, 'Dəyişdir', 'Change', 'Изменить'),
(175, 'Yeni şifrələr uyğun gəlmir.', 'New passwords do not match', 'Новые пароли не совпадают.'),
(176, 'Köhnə şifrə yanlışdır', 'Old password is wrong ', 'Старый пароль неправильный '),
(177, 'Şifrə uğurla dəyişdirildi', 'Password changed successfully ', 'Пароль успешно изменен'),
(178, 'Partnyor', 'Partner', 'Партнер'),
(179, 'Partnyorlar', 'Partners', 'Партнеры'),
(180, 'Partnyor adı', 'Partner name', 'Имя партнера'),
(181, 'Partnyor loqosu', 'Partner logo', 'Логотип партнера'),
(182, 'Partnyor kodu', 'Partner ID', 'Номер партнера'),
(183, 'Partnyor əlavə et', 'Add a partner', 'Добавить партнер'),
(184, 'Partnyorlarımız', 'Our Partners', 'Наши партнеры'),
(185, 'Mətn', 'Text', 'Текст'),
(186, 'Yönləndirmə səhifəsi', 'Redirection page', 'Страница перенаправления'),
(187, 'Ana səhifə', 'Main page', 'Главная страница'),
(188, 'Göstər', 'Show', 'Показать'),
(189, 'Gizlə', 'Hide', 'Спрятать'),
(190, 'Qalereya', 'Gallery', 'Галерея'),
(191, 'Keçid edin', 'Go to URL', 'Перейти');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8_bin NOT NULL,
  `address` text COLLATE utf8_bin NOT NULL,
  `phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `phone2` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `locations`
--

INSERT INTO `locations` (`id`, `country`, `address`, `phone`, `phone2`) VALUES
(5, 'Azərbaycan Bakı ş, ', 'Nərimanov ray, Ələsgər Qayıbov 12', '+994554907424', '+994124097424');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `mp_config`
--

CREATE TABLE `mp_config` (
  `id` int(11) NOT NULL,
  `title1_az` text COLLATE utf8_bin NOT NULL,
  `title1_en` text COLLATE utf8_bin NOT NULL,
  `title1_ru` text COLLATE utf8_bin NOT NULL,
  `text1_az` text COLLATE utf8_bin NOT NULL,
  `text1_en` text COLLATE utf8_bin NOT NULL,
  `text1_ru` text COLLATE utf8_bin NOT NULL,
  `title2_az` text COLLATE utf8_bin NOT NULL,
  `title2_en` text COLLATE utf8_bin NOT NULL,
  `title2_ru` text COLLATE utf8_bin NOT NULL,
  `text2_az` text COLLATE utf8_bin NOT NULL,
  `text2_en` text COLLATE utf8_bin NOT NULL,
  `text2_ru` text COLLATE utf8_bin NOT NULL,
  `btn1_az` varchar(255) COLLATE utf8_bin NOT NULL,
  `btn1_en` varchar(255) COLLATE utf8_bin NOT NULL,
  `btn1_ru` varchar(255) COLLATE utf8_bin NOT NULL,
  `btn2_az` varchar(255) COLLATE utf8_bin NOT NULL,
  `btn2_en` varchar(255) COLLATE utf8_bin NOT NULL,
  `btn2_ru` varchar(255) COLLATE utf8_bin NOT NULL,
  `btn1` varchar(255) COLLATE utf8_bin NOT NULL,
  `btn2` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `mp_config`
--

INSERT INTO `mp_config` (`id`, `title1_az`, `title1_en`, `title1_ru`, `text1_az`, `text1_en`, `text1_ru`, `title2_az`, `title2_en`, `title2_ru`, `text2_az`, `text2_en`, `text2_ru`, `btn1_az`, `btn1_en`, `btn1_ru`, `btn2_az`, `btn2_en`, `btn2_ru`, `btn1`, `btn2`) VALUES
(0, 'Biz Həmişə Peşəkarlığımızla Təəccübləndiririk.', 'We Always Surprise With Our Professionalism.', 'Мы Всегда Удивляем Нашим Профессионализмом', 'Biz Həmişə Peşəkarlığımızla Təəccübləndiririk.', 'We Always Surprise With Our Professionalism.', 'Мы Всегда Удивляем Нашим Профессионализмом', 'Bizim Siyasətimiz', 'Our Policy', 'Наша Политика', '◎ Keyfiyyət\r\n◎ Peşəkarlıq\r\n◎ Kadr siyasəti\r\n◎ Məxfilik', '◎ Quality\r\n◎ Professionalism\r\n◎ Confidentiality \r\n◎ HR policy\r\n', '◎   Качество\r\n◎   Профессионализм\r\n◎   Конфиденциальность\r\n◎   Кадровая политика', 'Daha ətraflı', 'More detailed', 'Подробнее', 'presentation', 'presentation', 'presentation', 'http://argroup.az/about.php', 'http://argroup.az/?f=4');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8_bin NOT NULL,
  `cat` int(11) NOT NULL,
  `header_az` varchar(255) COLLATE utf8_bin NOT NULL,
  `header_en` varchar(255) COLLATE utf8_bin NOT NULL,
  `header_ru` varchar(255) COLLATE utf8_bin NOT NULL,
  `text_az` varchar(255) COLLATE utf8_bin NOT NULL,
  `text_en` varchar(255) COLLATE utf8_bin NOT NULL,
  `text_ru` varchar(255) COLLATE utf8_bin NOT NULL,
  `img` varchar(255) COLLATE utf8_bin NOT NULL,
  `videol` varchar(255) COLLATE utf8_bin NOT NULL,
  `o_s` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `news`
--

INSERT INTO `news` (`id`, `date`, `cat`, `header_az`, `header_en`, `header_ru`, `text_az`, `text_en`, `text_ru`, `img`, `videol`, `o_s`) VALUES
(9, '10.02.2020 00:59:50', 3, 'AR GROUP CS Məlumat', 'AR GROUP CS Information', 'AR GROUP CS Информация', 'Xitmətlərimiz', 'Our services', 'Наши услуги', '48b46cb02b6eca0993674878cb117fd1.jpg', '', 21),
(10, '20.01.2021 00:05:57', 4, 'Firestop Azərbaycan / Firestopping', 'Firestop Azerbaijan / Firestopping', 'Firestop Азербайджан / Firestopping', '', '', '', '02a3ddaae4efb2a81da732f5525965c6.jpg', 'https://argroup.az/service.php?id=37', 9),
(11, '20.01.2021 19:06:52', 3, 'FÜZULİ HAVA LİMANININ TƏMƏLİ QOYULUB', 'FUZULI AIRPORT FOUNDATION laid', 'Заложен ФУНДАМЕНТ АЭРОПОРТА ФИЗУЛИ', '', '', '', '0aa049ba5dc73d650d34c95a8b043ff8.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/-eBgkZrU4tg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 17),
(12, '20.01.2021 19:15:00', 7, '20 Yanvar faciəsi', 'The tragedy of January 20', 'Трагедия 20 января', '', '', '', 'a7a3b9bb4975bb5f1c81046b23b8b5fe.png', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JHwMd5NayYQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 11);

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `news_cats`
--

CREATE TABLE `news_cats` (
  `id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8_bin NOT NULL,
  `name_az` varchar(255) COLLATE utf8_bin NOT NULL,
  `name_en` varchar(255) COLLATE utf8_bin NOT NULL,
  `name_ru` varchar(255) COLLATE utf8_bin NOT NULL,
  `main3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `news_cats`
--

INSERT INTO `news_cats` (`id`, `date`, `name_az`, `name_en`, `name_ru`, `main3`) VALUES
(3, '', 'Tikinki', 'Construction', 'Строительство', 1),
(4, '', 'Firestop Azərbaycan / Firestopping', 'Firestop Azerbaijan / Firestopping', 'Firestop Азербайджан / Firestopping', 0),
(6, '', 'FÜZULİ HAVA LİMANININ TƏMƏLİ QOYULUB', 'FUZULI AIRPORT FOUNDATION laid', 'Заложен ФУНДАМЕНТ АЭРОПОРТА ФУЗУЛИ', 0),
(7, '', '20 Yanvar Faciəsi', 'The tragedy of January 20', 'Трагедия 20 Января', 0);

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title_en` varchar(255) COLLATE utf8_bin NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_bin NOT NULL,
  `title_az` varchar(255) COLLATE utf8_bin NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `pages`
--

INSERT INTO `pages` (`id`, `title_en`, `title_ru`, `title_az`, `url`) VALUES
(1, 'Main page', '', 'Ana Səhifə', 'index.php'),
(2, 'Contact Us', '', 'Bizimlə əlaqə', 'contact.php'),
(3, 'About Us', '', 'Haqqımızda', 'about.php'),
(4, 'Projects', '', 'Layihələr', 'projects.php'),
(5, 'Project Details', '', 'Layihə məlumatları\r\n', 'projects.php'),
(6, 'NEWS', '', 'Xəbərlər', 'news.php'),
(7, 'NEWS', '', 'Xəbər', 'post.php'),
(8, 'SERVİCES', '', 'Xidmətlər', 'services.php'),
(9, 'AWARDS', '', 'Mükafatlar', 'services.php'),
(10, '', '', 'Komandamıza Qatıl', 'join_us.php'),
(11, 'Gallery', 'Галерея', 'Qalereya', 'gallery.php'),
(77, 'CASPER PRIVATE', 'CASPER PRIVATE', 'CASPER PRIVATE', '');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_bin NOT NULL,
  `img` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `partners`
--

INSERT INTO `partners` (`id`, `name`, `img`) VALUES
(8, 'ZETAŞ YAPI MALZ. SAN. VE TİC. LTD. ŞTİ.', 'd4a67923f6694276cce039130b4109a7.png');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `pdf`
--

CREATE TABLE `pdf` (
  `id` int(11) NOT NULL,
  `date` varchar(40) COLLATE utf8_bin NOT NULL,
  `name` varchar(70) COLLATE utf8_bin NOT NULL,
  `file` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `pdf`
--

INSERT INTO `pdf` (`id`, `date`, `name`, `file`) VALUES
(10, '14.01.2021 17:28:43', 'Example NFI_ARG_PBT-2_Lev04_FSI_MEP_Job  Cal_001_R00_20210114', 'F147dc07e7e885ffb8c82ea51b0c518b5.pdf'),
(11, '14.01.2021 18:07:57', 'PBT-2_Example NFI_ARG_PBT-2_Lev 04_FSI-JT_JOB CAL_001_R00_20210114', 'F056f156b2eebe938b8029cb6e9c7ca2d.pdf'),
(13, '01.02.2021 22:33:57', 'Firestopping_Qiymət təklifi', 'F792992358f92fedcfbfa795200dc198e.rar'),
(14, '04.02.2021 14:15:26', 'OFFERS_Yeni Memar_Hilton Garden Inn_Parking', 'F900282c5800f737d6bfdd82ec47be694.rar'),
(15, '04.02.2021 21:24:51', 'OFFERS-Inter Сontinental Baku', 'F22ccfb4ac7db90fc11dd043e45d7da7f.rar');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `text_az` text COLLATE utf8_bin NOT NULL,
  `text_en` text COLLATE utf8_bin NOT NULL,
  `text_ru` text COLLATE utf8_bin NOT NULL,
  `img` varchar(255) COLLATE utf8_bin NOT NULL,
  `text2_az` text COLLATE utf8_bin NOT NULL,
  `text2_en` text COLLATE utf8_bin NOT NULL,
  `text2_ru` text COLLATE utf8_bin NOT NULL,
  `customer` varchar(255) COLLATE utf8_bin NOT NULL,
  `start_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `finish_date` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL,
  `mainpage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `projects`
--

INSERT INTO `projects` (`id`, `name`, `text_az`, `text_en`, `text_ru`, `img`, `text2_az`, `text2_en`, `text2_ru`, `customer`, `start_date`, `finish_date`, `status`, `mainpage`) VALUES
(25, '28-SOPPING MALL BRAVO MARKET', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION \r\n', 'Пассивные системы противопожарной защиты / Firestopping', '40f5e198d81364cce46f78a78ede6e31.jpg', '', '', '', '\"North West Construction\"', '2018', '2019', 1, 0),
(26, 'Winter Park 26-apartmens’ & 8-apartmens’ Residence', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION \r\n', 'Пассивные системы противопожарной защиты / Firestopping', '9d88b166b1c39d6a259631687e4d7455.jpg', '', '', '', 'Pasha Construction', '2019', '2019', 1, 0),
(45, '“Merchant Hotel” Project', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION', 'Пассивные системы противопожарной защиты / Firestopping', 'c260d3b8758394ef748843ee918cff57.jpg', 'Passiv Yanğın Müdafiə Sistemi / Firestopping &\r\nDeliklərin açılması və kimyəvi anker əkilməsi &\r\nAnkerlərin dartma testləri / Pull Out Testing', 'FIRE PROTECTION MEP Penetration / Firestopping &\r\nConcrete drilling & Installing chemical anchors &\r\nTraction tests of anchors / Pull Out Testing', 'Пассивные системы противопожарной защиты / Firestopping &\r\nСверление бетона и установка химических анкеров &\r\nТяговые испытания анкеров / Pull Out Testing', '\"Pasha Construction Project\" / Customer: Mep Contractor', '2019', '2019', 1, 0),
(46, '\"İbis Hotel\"', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION \r\n', 'Пассивные системы противопожарной защиты / Firestopping', '029926af2a5c2ea10c56a827713fd483.jpg', '', '', '', 'Ibis', '2019', '2020', 1, 0),
(47, '\"Winter Park Office Building\"', 'Passiv Yanğın Müdafiə Sistemi / Firestopping\r\n\r\n', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION \r\n\r\n', 'Пассивные системы противопожарной защиты / Firestopping', '82061c396f940918fb1406c895c26fe3.jpg', '', '', '', 'Pasha Construction', '2019', '2019', 1, 0),
(49, '“ Gulustan Saray ”', 'Passiv Yanğın Müdafiə Sistemi / Firestopping\r\n', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION \r\n\r\n\r\n', 'Пассивные системы противопожарной защиты / Firestopping', '384077c10d8649daf135a6b5b8294047.jpg', '', '', '', '\"KONTİNENT İNŞAAT\" MMC', '2019', '2019', 1, 0),
(50, '“JW Marriott Absheron Baku Hotel”', 'Passiv Yanğın Müdafiə Sistemi / Firestopping\r\n', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION \r\n', 'Пассивные системы противопожарной защиты / Firestopping\r\n', 'aa2cf70647768a14e7f079b63e6413cc.jpg', '', '', '', '\"Pasha Construction\"', '2019', '2019', 1, 0),
(52, '“Pharmaceutical Plant” Project', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION', 'Пассивные системы противопожарной защиты / Firestopping', '2cadb483397efee0921652f56e69bbba.jpg', '', '', '', '\"Shinkar Holding\"', '2019', '', 1, 0),
(54, '\"Crescent Development Project\"', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION', 'Пассивные системы противопожарной защиты / Firestopping', 'f3a416f8c79c071cb9665740ff810651.jpg', '', '', '', '\"Gilan İnşaat\"', '2019', '', 0, 0),
(67, 'BAKU | Port Baku Towers 2', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION SYSTEMS / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION', 'Пассивные системы противопожарной защиты / Firestopping', 'a14a9d18a12a6a4b3dc97e24517a7088.png', '', '', '', '\"Pasha Construction\"', '2020', '', 0, 1),
(68, '\"BAKU TOWER\"', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION', 'Пассивные системы противопожарной защиты / Firestopping', 'aafc480b2022579376cdec223f6e4d95.jpg', '', '', '', 'MEP-Contractor', '2019', '', 0, 1),
(69, '\"Ministry of Taxes Tower Baku\"', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION', 'Пассивные системы противопожарной защиты / Firestopping', 'c759063108707c042bdf7507e84656d9.jpg', '', '', '', 'TEKFEN Project / \"ANEL GRUP\"', '2019', '', 0, 1),
(70, '\"Baku White City Knightsbridge Residence\" Project', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION', 'Пассивные системы противопожарной защиты / Firestopping', '57b59d524be35e2728db08b9819082dc.jpg', 'Passiv Yanğın Müdafiə Sistemi & Ankerlərin dartma testləri / Pull Out Testing ', 'Firestopping & Traction tests of anchors / Pull Out Testing ', 'Пассивные системы противопожарной защиты & Тяговые испытания анкеров / Pull Out Testing ', '\"Pasha Construction\"', '2019', '', 0, 1),
(71, '“Caspian Waterfront Mall”', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION', 'Пассивные системы противопожарной защиты / Firestopping', '3094376b861e683d6bc8bcb0b48af2d1.png', '', '', '', '\"Pasha Construction Project\" / Customer  \"North West\" Construction', '2019', '2020', 1, 1),
(72, '\"Yelken Hotel\" Project \"', 'Passiv Yanğın Müdafiə Sistemi / Firestopping\r\n\r\n', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION\r\n', 'Пассивные системы противопожарной защиты / Firestopping', '565a8924a2a13b2d005be31dac1f7c7c.jpg', '', '', '', '\"North West Construction\"', '2019', '', 0, 1),
(73, '\"Winter Bulvar Hotel, Azerbaijan\"', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION', 'Пассивные системы противопожарной защиты / Firestopping', '8ad49fb35a3a5375e65d286d78de402c.png', '', '', '', '\"Pasha Construction\"', '2019', '', 1, 1),
(74, '“Azerbaijan Thermal Power Plant\"', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION', 'Пассивные системы противопожарной защиты / Firestopping', 'c9dffe0d1cd5662774bfab8f873b6b89.jpg', 'Passiv Yanğın Müdafiə Sistemi / Firestopping & Deliklərin açılması və kimyəvi anker əkilməsi', 'Firestopping & Concrete drilling & Installing chemical anchors', 'Пассивные системы противопожарной защиты / Firestopping & Сверление бетона и установка химических анкеров', '“Azerbaijan Thermal Power Plant\"', '2019', '', 0, 1),
(75, 'NGA BRAVO_Flagship Store / Гипермаркет Браво', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION', 'Пассивные системы противопожарной защиты / Firestopping', 'f2808028bd8659b233cb0597e5f6a884.jpg', '', '', '', '\"Pasha Construction Project\" / Customer \"North West\"', '2018', '2019', 1, 1),
(76, 'Light House Baku - Sea Breeze Resort', 'Passiv Yanğın Müdafiə Sistemi / Firestopping\r\n', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION\r\n\r\n', 'Пассивные системы противопожарной защиты / Firestopping', 'f437b1cbfbfcc19a0534ddb9c173bf45.jpg', '', '', '', 'Sea Breeze', '2020', '2020', 1, 0),
(77, '\"BRAVO MARKET GUNESHLI\"', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION', 'Пассивные системы противопожарной защиты / Firestopping', '44acc2d0304f67260d35bbe7ed39c6c5.jpg', '', '', '', 'MEP-Contractor', '2020', '2020', 1, 0),
(78, '\"BRAVO MARKET BAKIKHANOV\"', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION', 'Пассивные системы противопожарной защиты / Firestopping', 'ce23ebed430620af00d7df87f8c49671.jpg', '', '', '', 'MEP-Contractor', '2019', '2020', 1, 0),
(79, '\"BRAVO MARKET OAZIS\"', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION', 'Пассивные системы противопожарной защиты / Firestopping', '948aac00bd28b7bb48b834ae00553dad.jpg', '', '', '', 'MEP-Contractor', '2019', '2020', 1, 0),
(80, '\"Nizami Palace\"', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping\r\nMATERIALS SUPPLY & INSTALLATION', 'Пассивные системы противопожарной защиты / Firestopping', '86094fc22a0fd847df2895d24a3897fe.jpg', '', '', '', 'MEP-Contractor', '2019', '', 0, 0),
(81, '\"Baku Main Data Center\" (BMDC)', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping', 'Пассивные системы противопожарной защиты / Firestopping', '7a312b58fcf0dac20f420d0102a5a9ce.jpg', '', '', '', '\"Pasha Technology“ Project / Customer \"NİTEL  A.Ş ”', '2020', '2020', 1, 0),
(82, '\"Goychay Main Data Center\" (GMDC)', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping', 'Пассивные системы противопожарной защиты / Firestopping', 'add278161d85eaac9bd9029b192214f0.jpg', '', '', '', '\"Pasha Technology“ Project / Customer \"NİTEL A.Ş ”', '2020', '2020', 1, 0),
(83, '\"Bravo Market White Stone\"', 'Passiv Yanğın Müdafiə Sistemi / Firestopping ', 'FIRE PROTECTION MEP Penetration / Firestopping', 'Пассивные системы противопожарной защиты / Firestopping ', '2f3c8770be1c10e14d358b0ba36287f3.jpg', '', '', '', 'MEP-Contractor', '2021', '2021', 1, 0),
(84, '\"BRAVO MARKET XETAI PARK\"', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping', 'Пассивные системы противопожарной защиты / Firestopping ', 'e7a1d07c26532768e9aba1c42a6c17d7.jpg', '', '', '', 'MEP-Contractor', '2020', '2020', 1, 0),
(85, 'Qobu Elektrik Stansiyası', 'Deliklərin açılması və kimyəvi anker əkilməsi & Installing chemical anchors', 'Concrete drilling & Installing chemical anchors', 'Сверление бетона и установка химических анкеров & Installing chemical anchors', '220e3b349d6a113581585a07addfd865.jpg', '', '', '', 'MEP-Contractor', '2021', '', 0, 0),
(86, '\"Caspian Plaza\" Lotfi Zadeh Technology Center', 'Passiv Yanğın Müdafiə Sistemi / Firestopping', 'FIRE PROTECTION MEP Penetration / Firestopping', 'Пассивные системы противопожарной защиты / Firestopping ', 'a6b8c7c01a4f96e044ef25df1c0ef874.jpg', 'Firestopping', 'Firestopping', 'Firestopping', 'Lotfi Zadeh Technology Center', '2020', '2020', 1, 0);

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `red`
--

CREATE TABLE `red` (
  `id` int(11) NOT NULL,
  `url` varchar(200) COLLATE utf8_bin NOT NULL,
  `header_az` text COLLATE utf8_bin NOT NULL,
  `header_en` text COLLATE utf8_bin NOT NULL,
  `header_ru` text COLLATE utf8_bin NOT NULL,
  `text_az` text COLLATE utf8_bin NOT NULL,
  `text_en` text COLLATE utf8_bin NOT NULL,
  `text_ru` text COLLATE utf8_bin NOT NULL,
  `create_date` varchar(100) COLLATE utf8_bin NOT NULL,
  `seen` int(11) NOT NULL,
  `qrseen` int(11) NOT NULL,
  `clicktourl` int(11) NOT NULL,
  `qrclicktourl` int(11) NOT NULL,
  `code` varchar(250) COLLATE utf8_bin NOT NULL,
  `birbasha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `red`
--

INSERT INTO `red` (`id`, `url`, `header_az`, `header_en`, `header_ru`, `text_az`, `text_en`, `text_ru`, `create_date`, `seen`, `qrseen`, `clicktourl`, `qrclicktourl`, `code`, `birbasha`) VALUES
(7, 'https://ekranmedia.az', 'HEad az', '', '', 'Text az', '', '', '', 14, 15, 6, 1, '7161863636', 0),
(8, 'https://', '<i>Nümunə yönləndirmə </i> <font color=\"red\">səhifəsi</font>. Nömrə <u>1</u> ', '', '', 'Hörmətli, Argroup komandası <br/>,\r\nSiz bu test mətnindən istifadə edərək yazılarınızda <b>qalın</b>, <u>altıxətli</u> və ya <i>kursiv</i> yazı stillərindən istifadə edə bilərsiniz.\r\n <hr/> Bu isə ayırıcı xətt idi. Bu da yeni sətir olacaq: <br/>\r\n\r\nLink üçün <a href=\"https://argroup.az\" title=\"Link açıqlaması\">BU KODDAN</a> istifadə edin. <br/><br/>\r\n\r\nRəngli yazmaq istəsəniz\r\n <font color=\"red\">QIRMIZI</font>\r\n <font color=\"green\">YAŞIL</font>\r\n <font color=\"blue\">MAVİ</font>\r\n <font color=\"yellow\">SARI</font>\r\n <font color=\"white\">AĞ</font> \r\n <font color=\"black\">QARA</font> kimi rəng kodları xidmətinizdədir.\r\n<br/><br/>\r\n\r\nindi isə yazımızın ölçüsünü dəyişək <font size=\"24pt\">BÖYÜK</font> , <font size=\"2pt\">Balaca</font>,\r\n<font size=\"10pt\" color=\"red\">Böyük <u>və</u> Qırmızı</font>', '', '', '', 32, 0, 0, 0, '7118e31798', 0),
(12, 'https://argroup.az/?f=13', 'Salam,', '', '', '', '', '', '', 0, 0, 0, 0, '32170a8909', 0),
(13, 'https://argroup.az/?f=13', 'Salam,', '', '', '', '', '', '', 0, 0, 0, 0, '43895b9178', 0),
(14, 'https://argroup.az/?f=13', 'Firestopping-Qiymət təklifi', 'Firestopping-Qiymət təklifi', 'Firestopping-Qiymət təklifi', 'Salam,\r\n\r\nİstəyinizi nəzərə alaraq, firestop işləri ilə əlaqəli qiymət təklifini əlavədən endirmənizi xahiş edirik.\r\n\r\nBest Regards,\r\nAR GROUP_CS', 'Salam,\r\n\r\nİstəyinizi nəzərə alaraq, firestop işləri ilə əlaqəli qiymət təklifini əlavədən endirmənizi xahiş edirik.\r\n\r\nBest Regards,\r\nAR GROUP_CS', 'Salam,\r\n\r\nİstəyinizi nəzərə alaraq, firestop işləri ilə əlaqəli qiymət təklifini əlavədən endirmənizi xahiş edirik.\r\n\r\nBest Regards,\r\nAR GROUP_CS', '', 5, 5, 2, 3, '1195506335', 0),
(15, 'https://argroup.az/?f=14', 'OFFERS_Yeni Memar_Hilton Garden Inn_Parking', 'OFFERS_Yeni Memar_Hilton Garden Inn_Parking', 'OFFERS_Yeni Memar_Hilton Garden Inn_Parking', 'Salam Cavid bəy,\r\n\r\nSizin istəyiniz əsasından “Hilton Garden Inn_Parking” layihəsi ilə əlaqəli, Firestop işləri ilə bağlı, qiymət təklifini diqqətinizə çatdırırıq.\r\n\r\nİlk əməkdaşlıq məqsədlərini nəzərə alaraq, qiymət təklifi formalaşıb.\r\n\r\nHər hansı bir sualınız yaranarsa, bizim ilə əlaqə saxlamanızı sizdən xaqhiş edirik. \r\n\r\nÖncədən Təşəkkür edirik.\r\n', 'Salam Cavid bəy,\r\n\r\nSizin istəyiniz əsasından “Hilton Garden Inn_Parking” layihəsi ilə əlaqəli, Firestop işləri ilə bağlı, qiymət təklifini diqqətinizə çatdırırıq.\r\n\r\nİlk əməkdaşlıq məqsədlərini nəzərə alaraq, qiymət təklifi formalaşıb.\r\n\r\nHər hansı bir sualınız yaranarsa, bizim ilə əlaqə saxlamanızı sizdən xaqhiş edirik. \r\n\r\nÖncədən Təşəkkür edirik.', 'Salam Cavid bəy,\r\n\r\nSizin istəyiniz əsasından “Hilton Garden Inn_Parking” layihəsi ilə əlaqəli, Firestop işləri ilə bağlı, qiymət təklifini diqqətinizə çatdırırıq.\r\n\r\nİlk əməkdaşlıq məqsədlərini nəzərə alaraq, qiymət təklifi formalaşıb.\r\n\r\nHər hansı bir sualınız yaranarsa, bizim ilə əlaqə saxlamanızı sizdən xaqhiş edirik. \r\n\r\nÖncədən Təşəkkür edirik.', '', 2, 0, 0, 0, '684fa69343', 0),
(16, 'https://argroup.az/?f=15', 'Qiymət təklifi-Inter Сontinental Baku', 'OFFERS-Inter Сontinental Baku', 'Ценовое предложение-Inter Сontinental Baku', 'Salam Qurban bəy,\r\n\r\nSizin istəyiniz əsasından “InterСontinental Baku” layihəsi ilə əlaqəli, Firestop işləri ilə bağlı, qiymət təklifini diqqətinizə çatdırırıq.\r\n\r\nİlk əməkdaşlıq məqsədlərini nəzərə alaraq, qiymət təklifi formalaşıb.\r\n\r\nHər hansı bir sualınız yaranarsa, bizim ilə əlaqə saxlamanızı sizdən xaqhiş edirik. \r\n\r\nÖncədən Təşəkkür edirik.\r\n', 'Dear Gurban,\r\n\r\nUpon your request, we present to your attention a price offer related to the \"InterContinental Baku\" project, Firestop works.\r\n\r\nTaking into account the first goals of cooperation, a price offer was formed.\r\n\r\nIf you have any questions, please contact us.\r\n\r\nThank you in advance.', 'Уважаемый господин Гуртбан,\r\n\r\nПо вашему запросу мы представляем вашему вниманию ценовое предложение, связанное с проектом \"InterContinental Baku\" , работами Firestop.\r\n\r\nУчитывая первые цели сотрудничества, было сформировано ценовое предложение.\r\n\r\nЕсли у вас есть какие-либо вопросы, пожалуйста, свяжитесь с нами.\r\n\r\nЗаранее спасибо.', '', 1, 0, 0, 0, '9218cc4914', 0);

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) COLLATE utf8_bin NOT NULL,
  `name_en` varchar(255) COLLATE utf8_bin NOT NULL,
  `name_ru` varchar(255) COLLATE utf8_bin NOT NULL,
  `text_az` text COLLATE utf8_bin NOT NULL,
  `text_en` text COLLATE utf8_bin NOT NULL,
  `text_ru` text COLLATE utf8_bin NOT NULL,
  `ytb` text COLLATE utf8_bin NOT NULL,
  `main` int(11) NOT NULL,
  `icon` varchar(255) COLLATE utf8_bin NOT NULL,
  `kod` varchar(60) COLLATE utf8_bin NOT NULL,
  `psay` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `services`
--

INSERT INTO `services` (`id`, `name_az`, `name_en`, `name_ru`, `text_az`, `text_en`, `text_ru`, `ytb`, `main`, `icon`, `kod`, `psay`) VALUES
(30, 'KONSALTİNQ (Yanğın Təhlükəsizliyi)', 'Consulting (Fire safety)', 'Консалтинг (Пожарная безопасность)', 'Biz yanğın təhlükəsizliyi haqqında məsləhət veririk.', 'We give advice on fire safety.', 'Мы даем советы по пожарной безопасности.', '', 0, '<i class=\"fas fa-user-shield\"></i>', '0e95f386fe5a764124fbafaf263d18a3', 1),
(35, 'Aktiv Yanğından Mühafizə Sistemi / Fire Safety', 'Active Fire Protection Systems / Fire Safety', 'Активные системы противопожарной защиты / Fire Safety', 'Sprinkler, tüstü həyəcan siqnalları, yanğın həyəcan siqnalları, təcili işıqlandırma və s.\r\n\r\n', 'Sprinklers, smoke alarms, fire alarms, emergency lighting etc.\r\n', 'Разбрызгиватели, пожарная сигнализация, аварийное освещение и т. д.', '', 0, '<i class=\"fas fa-fire-alt\"></i>', 'ebfabed5258ac734c4e762593ec9c947', 2),
(37, 'Passiv Yanğın Müdafiə Sistemi  Firestopping ', 'Firestopping ', 'Пассивные системы противопожарной защиты  Firestopping ', 'Firestopping ', 'Firestopping ', 'Firestopping ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/LyqCSijahjw\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0, '<i class=\"fab fa-gripfire\"></i>', '08fde9405d4f52dfecc978b7683e84c3', 7),
(38, 'Betonun kəsilməsi, deliklərin açılması və kimyəvi anker əkilməsi', 'Concrete drilling & Installing chemical anchors', 'Сверление бетона и установка химических анкеров', 'Betonun almaz alətləri ilə kəsilməsi, deliklərin açılması, kimyəvi ankraj quraşdırılması işləri aparan ixtisaslaşmış bir şirkətik. Azərbaycanın ən böyük tikinti layihələrində iştirak edirik.', 'A company specializing in cutting reinforced concrete with diamond tools, drilling holes, installing chemical anchors. We are involved in the largest construction projects in Azerbaijan.', 'Мы специализируемая компания которая выполняет работу в строительстве резкой армированного бетона алмазными инструментами , открытием отверстий, химической монтаж анкеровкой. Мы принимаем участие в крупнейших строительных проектах в Азербайджане.', '', 0, '', 'fc9efe92206f61e256281bf144605407', 1),
(39, 'Ankerlərin dartma testləri / Pull Out Testing ', 'Traction tests of anchors / Pull Out Testing ', 'Тяговые испытания анкеров / Pull Out Testing ', 'Ankerlərin dartma testləri / Pull Out Testing', 'Traction tests of anchors / Pull Out Testing ', 'Тяговые испытания анкеров / Pull Out Testing ', '', 0, '', 'c111db08885c65f9f7b3ee2017a98c57', 1),
(40, 'Passiv Yanğın Müdafiə Sistemi / Fireproofing Protection', 'Fireproofing Protection', 'Пассивные системы противопожарной защиты / Fireproofing Protection', 'Passiv Yanğın Müdafiə Sistemi / Fireproofing Protection', 'Fireproofing Protection', 'Пассивные системы противопожарной защиты / Fireproofing Protection', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/99hTgaqXNfE\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0, '', 'ba26874010540bc67c28bb48b12198b9', 7);

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `default_lang` varchar(2) COLLATE utf8_bin NOT NULL,
  `location` varchar(255) COLLATE utf8_bin NOT NULL,
  `location2` varchar(255) COLLATE utf8_bin NOT NULL,
  `phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `phone2` varchar(50) COLLATE utf8_bin NOT NULL,
  `call_time` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `fb` varchar(255) COLLATE utf8_bin NOT NULL,
  `insta` varchar(255) COLLATE utf8_bin NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8_bin NOT NULL,
  `youtube` varchar(255) COLLATE utf8_bin NOT NULL,
  `about_us_footer` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `settings`
--

INSERT INTO `settings` (`id`, `default_lang`, `location`, `location2`, `phone`, `phone2`, `call_time`, `email`, `fb`, `insta`, `whatsapp`, `youtube`, `about_us_footer`) VALUES
(1, 'az', 'Azərbaycan Bakı, Nərimanov ray, Ələsgər Qayıbov 12', '', '+994554907424    +994552778424', '+994124097424', '9:00 - 18:00', 'office@argroup.com.az', 'argroup.az', 'argroupcs', '+994552778424', '', 'Haqqımızda məlumat yazısı admin paneldən idarə olunur.');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `from` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `subscribers`
--

INSERT INTO `subscribers` (`id`, `date`, `email`, `from`, `status`) VALUES
(9, '19.01.2021 23:33:37', 'rmustafayev@argroup.com.az', 0, 0),
(10, '20.01.2021 00:02:02', 'rmustafayev@argroup.com.az', 0, 0),
(11, '20.01.2021 19:35:17', 'qezenferhaciyev9@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8_bin NOT NULL,
  `tag_az` varchar(255) COLLATE utf8_bin NOT NULL,
  `tag_en` varchar(255) COLLATE utf8_bin NOT NULL,
  `tag_ru` varchar(255) COLLATE utf8_bin NOT NULL,
  `footer` int(11) NOT NULL,
  `news` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sxemi çıxarılan cedvel `tags`
--

INSERT INTO `tags` (`id`, `date`, `tag_az`, `tag_en`, `tag_ru`, `footer`, `news`) VALUES
(1, '24.12.19', 'İNŞAAT', 'Construction', 'Строительство', 1, 1),
(2, '', '\"Firestop_Passiv Yanğın Sistemləri\"', '\"Firestop_Passive Firestop Systems\"', '\"Firestop_Пассивные Противопожарные Системы\"', 1, 1),
(3, '', '\"Yanğın durdurucu sistem\"', '\"Fire protection\"', '\"Противопожарный\"', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Cədvəl üçün indekslər `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `certfs`
--
ALTER TABLE `certfs`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `join_us`
--
ALTER TABLE `join_us`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `komanda`
--
ALTER TABLE `komanda`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `mp_config`
--
ALTER TABLE `mp_config`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `news_cats`
--
ALTER TABLE `news_cats`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `red`
--
ALTER TABLE `red`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- Cədvəl üçün AUTO_INCREMENT `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `certfs`
--
ALTER TABLE `certfs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Cədvəl üçün AUTO_INCREMENT `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Cədvəl üçün AUTO_INCREMENT `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Cədvəl üçün AUTO_INCREMENT `join_us`
--
ALTER TABLE `join_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Cədvəl üçün AUTO_INCREMENT `komanda`
--
ALTER TABLE `komanda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Cədvəl üçün AUTO_INCREMENT `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- Cədvəl üçün AUTO_INCREMENT `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Cədvəl üçün AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Cədvəl üçün AUTO_INCREMENT `news_cats`
--
ALTER TABLE `news_cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Cədvəl üçün AUTO_INCREMENT `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Cədvəl üçün AUTO_INCREMENT `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Cədvəl üçün AUTO_INCREMENT `pdf`
--
ALTER TABLE `pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Cədvəl üçün AUTO_INCREMENT `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Cədvəl üçün AUTO_INCREMENT `red`
--
ALTER TABLE `red`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Cədvəl üçün AUTO_INCREMENT `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Cədvəl üçün AUTO_INCREMENT `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Cədvəl üçün AUTO_INCREMENT `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

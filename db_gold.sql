-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2017 at 08:41 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_gold`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE IF NOT EXISTS `tbl_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `topic` text NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `tid`, `topic`, `detail`) VALUES
(3, 1, 'What Student Get?', '<ul>\r\n<li>Find best universities and colleges according to your profile.</li>\r\n<li>Know possible career paths, their future jobs and international scenario.</li>\r\n<li>Get scholarship and other financial support.</li>\r\n<li>Financial estimates to assess admission, living and visa eligibility.</li>\r\n<li>Training for tests and interviews.</li>\r\n<li>Get support after you land in new destination.</li>\r\n\r\n\r\n</ul>'),
(4, 1, 'Basic Services', '<ul><li>Overseas Education/ Study Abroad Consultant</li>\r\n\r\n<li>TOEFL/ IELTS/ GMAT/ GRE preparation</li>\r\n\r\n<li>Language Classes</li>\r\n<li>Scholarships, paid internship courses</li>\r\n\r\n<li>Credit transfer</li>\r\n\r\n<li>Visa guidance</li>\r\n\r\n<li>University interviews, bank loans</li>\r\n\r\n<li>Air ticket & accommodation</li>\r\n\r\n<li>Post landing facilities</li>\r\n\r\n\r\n</ul>\r\n'),
(5, 1, 'Company Profile', '<br>\r\n\r\nFirst of all let us introduce ourselves, GOLD STONE CONSULTANCY PVT. LTD is an educational consultancy has been registered at the office of the Company Register, Government of Nepal. Our aims to assist the students who want to go abroad for further studies, to be migrated as a skilled worker and render educational counseling so as to make them aware of the international educational system, academic courses, and documentations to help them to achieve their goals. Furthermore, we, the experienced team have worked in this area for over five years.\r\n <br><br>\r\nIn order to achieve the professional aims and ethics, we can play a bridge role in making the student aware of your university, the courses to be taught, and the exchange program having been offered or to be offered by the university/college, therefore, would like to coordinate, shake hands with your reputed university/college to work together effectively and productively by sending the students from Nepal. We always strive to render the highly acknowledgeable information that you need to know.\r\n<br><br>\r\nGold Stone Consultancy, offers services that help students in making the most important decision of their life- about education and future career. It provides information on more courses from several universities and institutions from different countries. Our counseling has a unique approach in matching a student''s course with its long term career goals and life planning. We work on student''s profile and help students to make best choice by suggesting careers, their associated professions, future demand in industry, and international scenarios of those careers. Once this is done, we then assist students in getting admission and visa to their destination country.\r\n<br><br>Gold Stone Consultancy, has a team of highly talented visa professionals, who are dedicated to get our students through visa process successfully. This team gets rigorous training on updated student immigration laws and common visa complications. Team''s knowledge is continuously upgraded and each member gets assessed on their skills. Also our stringent processes to verify visa applications make our applications highly successful.\r\n\r\n'),
(6, 2, 'IT Company Profile', 'The program of standardization and development of various IT based components in Information Technology is of high priority. It increases effectiveness and economy in acquiring and administering information technology resources throughout organization by promoting compatibility and interchangeability of equipment, programs, usefulness and life of systems; minimize duplication of data, facilitate information interchange, ensuring proper security safeguards planning and allow the orderly replacement or upgrading of components. '),
(7, 2, 'IT Company Profile', 'Today, the global time has become such that any organization is inseparable from IT and Nepalese market is no exception. IT has become an integral part of any organization for its growth. Every country around the world has been using the Information Technology for smooth functioning, efficient operation, keeping records to provide better services to its service seekers. This is a very dynamic tool and its functionality is being advance every day. It has become high time to Nepal that it steps up to catch up with the world through IT.'),
(8, 1, 'Message From MD', '<br>\r\nWe are pleased to introduce our organization, a study counseling representative for foreign colleges and universities in different countries. The members and the human resources in this organization are experienced in abroad study counseling for few years. This organization is established to leave a different impact on society helping it in some ways and providing the true and reliable information on aboard the study.\r\n<br><br>\r\nDemand of the educated, skilled and professional person has increased as the world has been transformed into a global village due to the advancement of modern technology. As people have been aware of this, they are seeking for the professional education for the career advancement. In our country too, People are asking for the better & professional education, the young generation is eager to pursue for the education in developed world because of the easiest access to the professional education.\r\n<br><br>\r\nWe are confident that your time with us will be enjoyable and equally rewarding with the new skills and confidence gained here.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `user`, `pass`) VALUES
(2, 'Araj Chalise', 'araj', 'araj123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_application`
--

CREATE TABLE IF NOT EXISTS `tbl_application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_application`
--

INSERT INTO `tbl_application` (`id`, `tid`, `title`, `name`, `contact`, `email`, `time`) VALUES
(5, 1, 'male', 'Araj Chalise', '9841101935', 'ac.sir40@gmail.com', '11'),
(6, 0, 'male', 'Araj Chalise', '9841101935', 'ac.sir40@gmail.com', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE IF NOT EXISTS `tbl_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`id`, `name`, `image`) VALUES
(10, 'Nursing Association Nepal ', 'naan.jpg'),
(11, 'Siddhartha Social Development Center', 'ssdc.jpg'),
(12, 'Non Formal Education Center', 'gov.jpg'),
(13, 'Smart Pvt. Ltd.', 'smart.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clientsvoice`
--

CREATE TABLE IF NOT EXISTS `tbl_clientsvoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pos` varchar(255) NOT NULL,
  `off` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_clientsvoice`
--

INSERT INTO `tbl_clientsvoice` (`id`, `name`, `pos`, `off`, `msg`, `img`) VALUES
(1, 'Mr. Arjun Chalise ', 'Managing Director ', 'Smart Pvt. Ltd.', 'It''s wonderful experience in working with Gold Stone Consultancy Pvt. Ltd. The services provided was satisfactory. Dedicated and energetic team member deliver work within time.  ', '02.jpg'),
(2, 'Prof. Tara Bhusal (Pokhrel)', 'President', 'Nursing Association of Nepal ', 'I am extremely satisfied with the service of Gold Stone Consultancy Pvt. Ltd. Very good company with dedicated group of staff member, I hope to do business with you guys in future as well. Thanks For Everything.', '01.jpg'),
(3, 'Mr. Choodamani Paudel', 'Director ', 'Non-Formal Education Center ', 'The experts of Gold Stone Consultancy are well acquainted with the modern tools and technologies. The experts from Gold Stone have always kept their fore finger in the cutting edge technologies and tools.', '03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `add` varchar(50) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `mess` text NOT NULL,
  `date` varchar(25) NOT NULL,
  `hit` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `add`, `contact`, `email`, `topic`, `mess`, `date`, `hit`) VALUES
(1, 'Araj Chalise', 'Kirtipur, Kathmandu', '9841101935', 'ac.sir40@gmail.com', 'About Abroad Study', 'Hello World', '', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE IF NOT EXISTS `tbl_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`id`, `country`, `img`) VALUES
(1, 'U.S.', 'us.jpeg'),
(2, 'Australia', 'aus.jpeg'),
(3, 'Japan', 'jpn.jpeg'),
(4, 'Korea', 'kor.jpeg'),
(5, 'Europe', 'den.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countryd`
--

CREATE TABLE IF NOT EXISTS `tbl_countryd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `topic` text NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_countryd`
--

INSERT INTO `tbl_countryd` (`id`, `tid`, `topic`, `detail`) VALUES
(6, 1, 'Why study in USA?', '<br>USA qualifications are recognized and respected throughout the world. Your US degree will be a strong foundation for building your future, boosting your career and prospects for a higher salary. Quality standards for US institutions are among the best in the world. There are many educational institutions that welcome international students in the US and the promise to enhance your qualification.<br>\r\n<br>The most prestigious, top ranked education globally.\r\n\r\n Safe, friendly and politically stable country that welcomes international students.\r\n\r\nUniversity campuses are clean and safe.\r\n\r\n Academic freedom is one of the hallmarks of US universities.\r\n\r\n Multicultural population which makes it a very dynamic and exciting place to experience.\r\n\r\n Different perspectives on instruction that promotes confidence on part of students.\r\n\r\n Many opportunities to join planned and informal activities with other students, such as hiking, skiing, museum visits, excursions to new cities, etc.\r\n\r\n Exposed to some of the most up-to-date developments in technology as the USA is a global leader in many areas of technology.\r\n\r\n Part time work permit for international students.\r\n\r\n Flexibility in the education system.'),
(8, 1, 'Education System', '<br>U.S. colleges are known worldwide for the quality of their facilities, resources, and faculty. One of the most distinctive features of U.S. universities and colleges is the choice of courses within a single institution. More importantly, students can move between one institution and another with relative ease. It is common to complete the first two years of a degree at one institution, usually a community college and then transfer to another to complete the degree.<br><br>\r\nThe system comprises of 12 years of primary and high school education, which is mandatory for getting admission in any graduate college, university, or for any professional and technical schools. It is not compulsory to accomplish these 12 years of elementary education within United States. Therefore students from overseas are also welcomed for higher education in United States.\r\n<br><br>U.S. higher education starts with undergraduate courses. You can earn either a two-year associate''s degree or a four-year bachelor’s degree. Students often earn an associate''s degree first, and then study two more years to gain a bachelor’s (or baccalaureate) degree. Usually, a bachelor’s degree will be awarded by a university, whereas an associate''s degree may be earned either at a community college or university.\r\n\r\n<br><br>\r\n\r\nUndergraduate degrees (and some master’s degrees) are awarded after a student completes a pre-determined number of courses. A student is awarded credits for the courses he or she takes, and the degree is complete when the student completes the required number of credits. This means that although most students complete bachelor’s degrees in four years, some spend longer if they take part-time classes or take time off from school.<br><br>Graduate degrees, often known as master’s degrees, require at least two years at a university. These are often termed “advanced professional degrees,” as they tend to be aimed at specific professions. Graduate degrees are career-advancing degrees in subjects such as medicine, law, and management. For example, a Master’s in Business Administration (MBA) is the standard business graduate degree. Doctorates (PhD) usually take four years to complete, and are research-based.\r\n\r\n'),
(13, 1, 'Admission Intake ', '<br>US universities typically have 2 main intakes with some institutions offering in June & March.\r\n\r\n     <ol start="1"> <li>January/February</li>\r\n\r\n    <li>August/September</li>\r\n\r\n     <li>May/June</li>\r\n\r\n    <li>March/April</li></ol>\r\n'),
(14, 2, 'About Australia', '<br>Australia is a natural wonderland of beautiful beaches, crystal blue waters, amazing ancient rock formations and pristine rain forests.\r\n<br><br>\r\nAustralia is the sixth largest country in the world and has the lowest population density per square kilometer.\r\n<br><br>\r\nAustralia has 16 world heritage listed properties with its historic townships, bustling cities, vivid landscapes and exotic flora and fauna\r\n<br><br>\r\nAustralia is an independent Western democracy with a population of more than 22 million. It is one of the world’s most urbanized countries, with about 70 per cent of the population living in the 10 largest cities. Most of the population is concentrated along the eastern seaboard and the south-eastern corner of the continent.\r\n<br><br>\r\nAustralia’s lifestyle reflects its mainly Western origins, but Australia is also a multicultural society which has been enriched by over six million settlers from almost 200 nations. Four out of ten Australians are migrants or the first-generation children of migrants, half of them from non-English speaking backgrounds.'),
(15, 2, 'Important Information', '<br><h3>Offer letter</h3><br>\r\n\r\n    <li>Academic documents till date</li>\r\n    <li>IELTS/TOEFL Score</li>\r\n    <li>Passport</li>\r\n    <li>Work Experience (If any)</li>\r\n    <li>University/College Application form</li>\r\n    <li>Skype/phone interview may be conducted by university for offer letter (Offer letter processing time 1 to 6 week)</li>\r\n\r\n<br><h3>Visa Documentation</h3><br>\r\n\r\n    <li>All academic documents (Transcript, Provisional, Character)</li>\r\n    <li>2 recent passport-size color photos with white background.</li>\r\n    <li>IELTS/TOEFL Score</li>\r\n    <li>Financial documents @ Educational Loan from Nabil or SBI bank limited of Nepal to cover 1 year fee & 1 year living cost (18610 AUD) with 2000 Traveling cost for Streamlined Students. or @ Minimum 3 months old bank balance certificate & statement with evidence of income</li>\r\n   <li> Income sources with supporting documents</li>\r\n    <li>Valuation of Property with supporting documents</li>\r\n    <li>Tax Clearance Certificate</li>\r\n    <li>CA Report</li>\r\n    <li>Relationship certificate with sponsors and family members</li>\r\n    <li>Birth Certificate</li>\r\n    <li>Police Report</li>\r\n    <li>Citizenship Certificate</li> (translated in English)</li>\r\n    <li>Confirmation of Enrollment (CoE) from University/College</li>\r\n    <li>Statement of Purpose (SOP)</li>\r\n\r\n(If you are applying with a spouse, evidence of the ‘genuine and continuing’ nature of your relationship with your spouse. For example;\r\n\r\n   <li> Marriage certificate</li>\r\n    <li>Evidence of cohabitation</li>\r\n    <li>Evidence of joint financial assets or liabilities (if applicable) such as joint ownership of property or joint bank accounts - Evidence of the social nature of the relationship such as photos together in various places, statements from friends/family members, loan to cover dependent’s living, traveling cost which is AUD 6515 per year with 2000 AUD Traveling cost.)</li>\r\n    <li>157A Visa Application form</li>\r\n    <li>Visa Application charge (Demand Draft)</li>\r\n\r\n<br><b>Dependent Can apply at the same time with student<br><br></b>\r\n<br><h3>Expenses</h3><br>\r\n\r\n   <li> Tuition Fee payable for 1year AUD$ 18000 to AUD$ 22000</li>\r\n    <li>Pocket money (2000 AUD$)</li>\r\n    <li>Air Ticket (700 AUD$)</li>\r\n    <li>Approximate expenses might be 15000 to 18000 UD$: NPR 15 to 18 Lakhs.</li>\r\n'),
(16, 3, 'About Japan', '<br>Japan is a country with rich nature, diverse topography, and beautiful turns of the seasons. Modern Japanese culture and society consist of a diverse mix of the old and new, the East and West, and the natural and artificial. These seemingly contradictory elements coexist in harmony in Japan. For example, it is not unusual to see an old Buddhist temple and a modern skyscraper standing next to each other.<br><br>\r\nThe greatest appeal of studying in Japan is its academic environment where one can study state-of-the-art technology and acquire the knowledge that enabled Japan’s phenomenal postwar economic growth. Japanese universities and other institutes of higher education can offer course studies or research programs of virtually any field. Many institutions of higher education, such as universities and junior colleges, are well equipped with fine research, computer, and library facilities and enable students to carry out their research in an excellent environment.<br><br>\r\n\r\n<h3>Process</h3><br>\r\n\r\nThe general case of studying in Japan begins with a student first enrolling for a Japanese Language course for at least six months in Nepal. Once this course is completed successfully the student gets an admission into a school or college in Japan where they need to study Japanese Language for another one or two year depending on their proficiency level in Japanese Language.\r\n\r\n<br><br>\r\n<h3>Who is Eligible?</h3><br>\r\n    <li>Should be a +2 or equivalent graduate.\r\n</li>\r\n    <li>Should have studied Japanese Language for at least six months (160 hours).\r\n</li>\r\n    <li>Should have not been rejected before, either for the Japanese student visa or certificate of Eligibility.\r\n</li>\r\n<br><br><h3> Document Required </h3><br>\r\n\r\n   <li> Certificate of all the educational backgrounds</li>\r\n    <li>Certificate for minimum 6 months (160 hrs) of Japanese Language training</li>\r\n    <li>Certificate of work experience if applicable</li>\r\n    <li>Certificate of relationship verification of the applicant with the sponsor for eg. Father, mother.</li>\r\n    <li>Certificate of property valuation.</li>\r\n    <li>Certificate of tax clearance, income source of the sponsor.</li>\r\n    <li>Certificate of Bank balance with minimum six month’s transaction.</li>\r\n    <li>Certificate of good conduct confirming non-involvement in any criminal activities from the district police headquarters (Police report)</li>\r\n    <li>Certificate from a registered doctor confirming the student to be physically and mentally fit.</li>\r\n   <li> 7 copies of passport size photographs</li>\r\n    <li>Copy of Valid passport\r\n</li>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dev`
--

CREATE TABLE IF NOT EXISTS `tbl_dev` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_dev`
--

INSERT INTO `tbl_dev` (`id`, `name`, `post`, `img`, `msg`) VALUES
(2, 'Subin Chalise ', 'Managing Director ', 'md.jpg', 'Subin Chalise has Masters Degree in MSc. IT from Sikkim Manipal University. He establish GOLD STONE in 2012, from then he is actively working in the field of IT. His dedication towards IT is the inspiration for the many new comer in this field.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fact`
--

CREATE TABLE IF NOT EXISTS `tbl_fact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_fact`
--

INSERT INTO `tbl_fact` (`id`, `title`, `data`) VALUES
(1, 'Career Counseling ', 'The relation between student and us is not only for the duration they stay in Nepal. After their arrival in the respective country, we will be still in touch with them and give career guidance for student’s better future. While in Nepal, we give them training about the work they possibly get in there or we suggest to get training from any institutions which may help them in future. We also guide our students about the working environment of the country, work policies and other legal procedure that must be followed. '),
(2, 'Visa Counseling', 'Once student get Certificate of Eligibility or Offer Letter student must go to the embassy of the respective country for visa processing. For visa, student must attach their documents along with the visa application. Our counselors guide them to prepare appropriate documents and make them ready to face the interview taken by the Embassy. In visa counseling session our counselors take the model interview to make them familiar with the interview.And also we arrange classes about that countrys lifestyle, surroundings, etc. '),
(3, 'Documentation', 'Before getting admitted in the university one should prepare documents for the study purpose. Many document must be prepared according to the university rules and regulation. GOLD STONE guide you to prepare document appropriately. And after COE, student has to submit different documents to the embassy according to the visa requirement of the country. Our expert counselors guide student to prepare standard documents and train student to attend visa interviews confidently. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fact_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_fact_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` text NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_fact_detail`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE IF NOT EXISTS `tbl_faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_faq`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE IF NOT EXISTS `tbl_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `data` text NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`id`, `tid`, `data`, `img`) VALUES
(10, 2, 'Study in Korea for Jan/Feb Intake. 50- 100% scholarship available. Various City Option. For Bachelor and Masters and PhD. programme.', 'Study in Korea ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE IF NOT EXISTS `tbl_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`id`, `language`, `image`) VALUES
(1, 'Japanese ', ''),
(2, 'Korean ', ''),
(3, 'English', ''),
(4, 'Spanish', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languaged`
--

CREATE TABLE IF NOT EXISTS `tbl_languaged` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `topic` text NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_languaged`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE IF NOT EXISTS `tbl_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` text NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `topic`, `detail`) VALUES
(1, 'Web Design & Development', 'Now a days Website is mandatory for any business no matter Small or large. Every company wants to be in the internet. We are here to give the guidance for them. Website design and development is totally a creative job and our dedicated and energetic staff member guide you.  We are developing different websites for different private and government institutions. We have various member expertise in PHP, .NET, Python, HTML5, CSS3, jQuery, JavaScript etc. for website design and development process. '),
(2, 'Web Hosting ', 'Web hosting is a service that allows organizations and individuals to post a website or web page onto the Internet needed for the website or webpage to be viewed in the Internet. Websites are hosted, or stored, on special computers called servers. We provide space on the server for low cost and reliable service. Most hosting companies require that you own your domain in order to host with them but if you do not have a domain, we will help you purchase one.'),
(3, 'Software Development', 'Software development is the collective processes involved in creating software programs, embodying all the stages throughout the systems development life cycle. It is a sophisticated process and need lots of information related to that particular project. GOLD STONE offer you a software in the platform you require. Software are developed in OOP, you can reuse that code for future purpose. Codes are neatly coded and easy to understand so that any new developer can also understand the code.'),
(4, 'ICT Training', 'GOLD STONE consultancy offers you different training courses like Advance Office package (exclusive of MS Access), Advance Photoshop, Networking, Database Management System(Like MS SQL server, Oracle, MS Access etc.), Basic Computer operating system such as Linux, Unix, Windows. Beside this GOLD STONE offer you different programming language classes such as C, C++, C#, Java etc. We are also giving different training to different government official.'),
(5, 'Domain Registration', 'Domain registration is the one of the most important job in the web development process. Every websites and web application should have domain name. Domain is the actual address that points you to the particular website. We help you to buy your domain in favorable price. .com, .net, .org, .biz are the domain name that are mostly used in the Nepali market. You can buy these domain names from different vendors and it may cost you different price.  '),
(6, 'Maintenance', 'Not only in software and other IT works, GOLD STONE actively participating in hardware field. Once we deliver our product we assure your product will be maintained by our personnel. For the first year the maintenance cost will not be charged whereas after one year customer will have to pave some amount. For the customer outside the valley will also get our maintenance service. For hardware failure, you can contact us for service or you can visit our office with your device.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_service_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `topic` text NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_service_detail`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE IF NOT EXISTS `tbl_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_test`
--

INSERT INTO `tbl_test` (`id`, `test`, `img`) VALUES
(1, 'IELTS', 'name.jpg'),
(2, 'TOEFL', 'name.jpg'),
(4, 'NAT', 'name.jpg'),
(5, 'JLPT', 'name.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testd`
--

CREATE TABLE IF NOT EXISTS `tbl_testd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_testd`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonials`
--

CREATE TABLE IF NOT EXISTS `tbl_testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_testimonials`
--

INSERT INTO `tbl_testimonials` (`id`, `name`, `university`, `country`, `img`, `message`) VALUES
(1, 'Punam Sapkota', 'Sakura Japanese Language School', 'Japan', '01.PNG', 'It’s been a great pleasure to be a part of family of the GOLD STONE consultancy, their counseling and career guidance help me to be in here. Staff members are polite and kind, and their work is brilliant. Their regular follow up and guidance over career are the key things which makes GOLD STONE unique than other.'),
(2, 'Shanti Thapa', 'Kyung Hee University ', 'Korea', '02.png', 'I am very happy that I have chosen GOLD STONE consultancy for abroad study. They help me to prepare myself for studying in Korea and also guide me throughout the application process. Even they are in touch with me after my arrival in Korea and make themselves available whenever I need them.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_works`
--

CREATE TABLE IF NOT EXISTS `tbl_works` (
  `WId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  PRIMARY KEY (`WId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_works`
--

INSERT INTO `tbl_works` (`WId`, `Name`, `URL`, `Image`) VALUES
(2, 'Nursing Association Nepal', 'www.nursingassoc.org.np', 'NAN.png'),
(3, 'Smart Pvt. Ltd.', 'www.smart.info.np', 'SMART.png'),
(4, 'Non Formal Education Center', 'www.nfec.gov.np', 'NFEC.png');

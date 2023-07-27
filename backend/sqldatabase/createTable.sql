CREATE DATABASE superhr;
use superhr;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  full_name_th VARCHAR(100),
  full_name_eng VARCHAR(100),
  id_passport VARCHAR(50),
  gender VARCHAR(10),
  nationality VARCHAR(50),
  date_of_birth DATE,
  religion VARCHAR(50),
  email VARCHAR(100),
  phone_number VARCHAR(20),
  role VARCHAR(100),
  area VARCHAR(100),
  areafrom VARCHAR(100),
  areato VARCHAR(100)
);

CREATE TABLE addresses (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  house_registration_address VARCHAR(100),
  current_address VARCHAR(100),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE positions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  position_1 VARCHAR(50),
  position_2 VARCHAR(50),
  from_date DATE,
  to_date DATE,
  reason VARCHAR(100),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  contact_person VARCHAR(100),
  contact_phone_number VARCHAR(20),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE education (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  education_level VARCHAR(50),
  university VARCHAR(100),
  faculty VARCHAR(100),
  major VARCHAR(100),
  year INT,
  gpa DECIMAL(3,2),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE documents (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  resume_data LONGTEXT,
  certi_data LONGTEXT,
  hr_data LONGTEXT,
  idcard_data LONGTEXT,
  photo_data LONGTEXT,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE salaries (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  salary numeric,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE candidate_followup (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  status ENUM('new', 'pre_screen', 'short_list', 'test', 'scheduled_interview', 'interviewed', 'pass', 'fail', 'hire', 'hold', 'cancel') DEFAULT 'new',
  followup_date TIMESTAMP,
  typeapp ENUM('intern', 'jobseeker') null,
  notes VARCHAR(255),
  cancel_reason VARCHAR(255) null,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE CreatePosition (
    PositionID INT PRIMARY KEY AUTO_INCREMENT,
    PositionName VARCHAR(255) NOT NULL,
    WorkType ENUM('Hybrid', 'WFH', 'Onsite') NOT NULL,
    Location VARCHAR(255) NOT NULL,
    Station VARCHAR(255) NOT NULL,
    Enable BOOLEAN NOT NULL,
    TestRequire BOOLEAN NOT NULL,
    TestPeriod INT NULL,
    TestQuestion VARCHAR(255) NULL,
    StartDate DATE NULL,
    EndDate DATE NULL
);

CREATE TABLE NearTransport (
    TransportID INT PRIMARY KEY AUTO_INCREMENT,
    PositionID INT,
    Checked BOOLEAN NOT NULL,
    TransportType ENUM('MRT', 'BTS') NOT NULL,
    FOREIGN KEY (PositionID) REFERENCES CreatePosition (PositionID)
);

CREATE TABLE TestAssessmentCriteria (
    CriteriaID INT PRIMARY KEY AUTO_INCREMENT,
    PositionID INT,
    Criteria VARCHAR(255) NOT NULL,
    FOREIGN KEY (PositionID) REFERENCES CreatePosition(PositionID)
);

CREATE TABLE InterviewAssessmentCriteria (
    CriteriaID INT PRIMARY KEY AUTO_INCREMENT,
    PositionID INT,
    Criteria VARCHAR(255) NOT NULL,
    FOREIGN KEY (PositionID) REFERENCES CreatePosition(PositionID)
);


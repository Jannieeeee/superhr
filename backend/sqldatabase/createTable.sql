CREATE DATABASE superhr;
use superhr;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  full_name_th VARCHAR(100),
  full_name_eng VARCHAR(100),
  id_passport VARCHAR(50),
  id_citizen VARCHAR(50),
  gender VARCHAR(10),
  nationality VARCHAR(50),
  date_of_birth DATE,
  religion VARCHAR(50),
  email VARCHAR(100),
  phone_number VARCHAR(20),
  photo longtext,
  address longtext,
  role ENUM('user', 'admin') DEFAULT 'user'
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

ALTER TABLE candidate_followup 
MODIFY COLUMN followup_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP;


CREATE TABLE addresses (
  id INT AUTO_INCREMENT PRIMARY KEY,
  house_registration_address VARCHAR(100),
  current_address VARCHAR(100),
 followup_id INT,
  FOREIGN KEY (followup_id) REFERENCES candidate_followup(id)
);

CREATE TABLE positions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  position_1 VARCHAR(50),
  position_2 VARCHAR(50),
  from_date DATE,
  to_date DATE,
  reason VARCHAR(100),
   followup_id INT,
  FOREIGN KEY (followup_id) REFERENCES candidate_followup(id)
);

CREATE TABLE contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  contact_person VARCHAR(100),
  contact_phone_number VARCHAR(20),
	followup_id INT,
  FOREIGN KEY (followup_id) REFERENCES candidate_followup(id)
);

CREATE TABLE education (
  id INT AUTO_INCREMENT PRIMARY KEY,
  university VARCHAR(100),
  faculty VARCHAR(100),
  major VARCHAR(100),
  year INT,
  gpa DECIMAL(3,2),
	followup_id INT,
  FOREIGN KEY (followup_id) REFERENCES candidate_followup(id)
);

CREATE TABLE documents (
  id INT AUTO_INCREMENT PRIMARY KEY,
  transcript LONGTEXT,
  resume_data LONGTEXT,
  house_data LONGTEXT,
idcard_data LONGTEXT,
  photo_data LONGTEXT,
  certi_data LONGTEXT,
  other LONGTEXT,
	followup_id INT,
  FOREIGN KEY (followup_id) REFERENCES candidate_followup(id)
);

CREATE TABLE salaries (
  id INT AUTO_INCREMENT PRIMARY KEY,
  salary numeric,
	followup_id INT,
  FOREIGN KEY (followup_id) REFERENCES candidate_followup(id)
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

CREATE TABLE ScheduleInterview (
    InterviewID INT PRIMARY KEY AUTO_INCREMENT,
    LocationLink VARCHAR(255) NOT NULL,
    InterviewDate DATE NOT NULL,
    StartTime TIME NOT NULL,
    EndTime TIME NOT NULL,
	followup_id INT,
  FOREIGN KEY (followup_id) REFERENCES candidate_followup(id)
);

DELIMITER //
CREATE PROCEDURE InsertScheduleInterview(
    IN p_LocationLink VARCHAR(255),
    IN p_InterviewDate DATE,
    IN p_StartTime TIME,
    IN p_EndTime TIME,
    IN p_UserID INT
)
BEGIN
    INSERT INTO ScheduleInterview(
        LocationLink, 
        InterviewDate, 
        StartTime, 
        EndTime, 
        UserID
    )
    VALUES(
        p_LocationLink, 
        p_InterviewDate, 
        p_StartTime, 
        p_EndTime, 
        p_UserID
    );
END //
DELIMITER ;

DELIMITER //
CREATE VIEW position_details AS
SELECT 
    CP.PositionID,
    CP.PositionName,
    CP.WorkType,
    CP.Location,
    CP.Station,
    CP.Enable,
    CP.TestRequire,
    CP.TestPeriod,
    CP.TestQuestion,
    CP.StartDate,
    CP.EndDate,
    NT.TransportType,
    TAC.Criteria AS TestCriteria,
    IAC.Criteria AS InterviewCriteria
FROM
    CreatePosition CP
    LEFT JOIN NearTransport NT ON CP.PositionID = NT.PositionID
    LEFT JOIN TestAssessmentCriteria TAC ON CP.PositionID = TAC.PositionID
    LEFT JOIN InterviewAssessmentCriteria IAC ON CP.PositionID = IAC.PositionID;
DELIMITER ;

DELIMITER //
CREATE PROCEDURE AddPosition(
    IN PositionName VARCHAR(255), 
    IN WorkType ENUM('Hybrid', 'WFH', 'Onsite'), 
    IN Location VARCHAR(255), 
    IN Station VARCHAR(255), 
    IN Enable BOOLEAN, 
    IN TestRequire BOOLEAN, 
    IN TestPeriod INT, 
    IN TestQuestion VARCHAR(255), 
    IN StartDate DATE, 
    IN EndDate DATE
)
BEGIN
    INSERT INTO CreatePosition(
        PositionName, 
        WorkType, 
        Location, 
        Station, 
        Enable, 
        TestRequire, 
        TestPeriod, 
        TestQuestion, 
        StartDate, 
        EndDate
    )
    VALUES(
        PositionName, 
        WorkType, 
        Location, 
        Station, 
        Enable, 
        TestRequire, 
        TestPeriod, 
        TestQuestion, 
        StartDate, 
        EndDate
    );
END //

DELIMITER ;

CREATE VIEW candidate_detail AS
SELECT cf.id, cf.user_id, cf.status, cf.followup_date, cf.typeapp, cf.notes, cf.cancel_reason, 
       a.house_registration_address, a.current_address, 
       p.position_1, p.position_2, p.from_date, p.to_date, p.reason,
       c.contact_person, c.contact_phone_number, 
       e.university, e.faculty, e.major, e.year, e.gpa, 
       d.transcript, d.resume_data, d.house_data, d.idcard_data, d.photo_data, d.certi_data, d.other,
       s.salary
FROM candidate_followup cf 
LEFT JOIN addresses a ON cf.id = a.followup_id
LEFT JOIN positions p ON cf.id = p.followup_id
LEFT JOIN contacts c ON cf.id = c.followup_id
LEFT JOIN education e ON cf.id = e.followup_id
LEFT JOIN documents d ON cf.id = d.followup_id
LEFT JOIN salaries s ON cf.id = s.followup_id;



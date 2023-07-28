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

CREATE TABLE ScheduleInterview (
    InterviewID INT PRIMARY KEY AUTO_INCREMENT,
    LocationLink VARCHAR(255) NOT NULL,
    InterviewDate DATE NOT NULL,
    StartTime TIME NOT NULL,
    EndTime TIME NOT NULL,
    UserID INT,
    FOREIGN KEY (UserID) REFERENCES users(id)
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




CREATE VIEW user_details AS
SELECT 
  users.id, 
  users.username, 
  users.password, 
  users.full_name_th, 
  users.full_name_eng, 
  users.id_passport, 
  users.gender, 
  users.nationality, 
  users.date_of_birth, 
  users.religion, 
  users.email, 
  users.phone_number, 
  users.role, 
  users.area, 
  users.areafrom, 
  users.areato, 
  addresses.house_registration_address, 
  addresses.current_address, 
  positions.position_1, 
  positions.position_2, 
  positions.from_date, 
  positions.to_date, 
  positions.reason, 
  contacts.contact_person, 
  contacts.contact_phone_number, 
  education.education_level, 
  education.university, 
  education.faculty, 
  education.major, 
  education.year, 
  education.gpa, 
  documents.resume_data, 
  documents.certi_data, 
  documents.hr_data, 
  documents.idcard_data, 
  documents.photo_data, 
  salaries.salary, 
  candidate_followup.status, 
  candidate_followup.followup_date, 
  candidate_followup.typeapp, 
  candidate_followup.notes, 
  candidate_followup.cancel_reason 
FROM users 
LEFT JOIN addresses ON users.id = addresses.user_id 
LEFT JOIN positions ON users.id = positions.user_id 
LEFT JOIN contacts ON users.id = contacts.user_id 
LEFT JOIN education ON users.id = education.user_id 
LEFT JOIN documents ON users.id = documents.user_id 
LEFT JOIN salaries ON users.id = salaries.user_id 
LEFT JOIN candidate_followup ON users.id = candidate_followup.user_id;

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


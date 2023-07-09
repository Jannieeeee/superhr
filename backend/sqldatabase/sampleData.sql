-- Sample data for `users` table
INSERT INTO users (
  username, password, full_name_th, full_name_eng, 
  id_passport, gender, nationality, date_of_birth, 
  religion, email, phone_number, role, area, areafrom, areato
) VALUES (
  'user1', 'password1', 'กิตติ สายสมุทร', 'Kitti Saisamut', 
  'ID12345', 'Male', 'Thai', '1995-01-01', 
  'Buddhism', 'user1@example.com', '0891234567', 'Staff', 'Bangkok', 'N/A', 'N/A'
), (
  'user2', 'password2', 'สุชาติ วงศ์เมือง', 'Suchat Wongmuang', 
  'ID67890', 'Male', 'Thai', '1985-02-02', 
  'Buddhism', 'user2@example.com', '0892345678', 'Manager', 'Bangkok', 'N/A', 'N/A'
), (
  'user3', 'password3', 'นที พรหมประเสริฐ', 'Natee Promprasert', 
  'ID45678', 'Male', 'Thai', '1993-03-03', 
  'Buddhism', 'user3@example.com', '0893456789', 'Engineer', 'Bangkok', 'N/A', 'N/A'
), (
  'user4', 'password4', 'พรเทพ วรรณวิบูลย์', 'Porntep Wanwiboon', 
  'ID98765', 'Male', 'Thai', '1991-04-04', 
  'Buddhism', 'user4@example.com', '0894567890', 'Architect', 'Bangkok', 'N/A', 'N/A'
), (
  'user5', 'password5', 'ณัฏฐ์ สุขใจ', 'Nat Sukjai', 
  'ID12349', 'Male', 'Thai', '1988-05-05', 
  'Buddhism', 'user5@example.com', '0895678901', 'Designer', 'Bangkok', 'N/A', 'N/A'
);

-- Sample data for `addresses` table
INSERT INTO addresses (user_id, house_registration_address, current_address) VALUES 
  (1, 'Bangkok', 'Bangkok'),
  (2, 'Bangkok', 'Bangkok'),
  (3, 'Chiang Mai', 'Bangkok'),
  (4, 'Phuket', 'Bangkok'),
  (5, 'Nakhon Pathom', 'Bangkok');

-- Sample data for `positions` table
INSERT INTO positions (user_id, position_1, position_2, from_date, to_date, reason) VALUES 
  (1, 'Staff', NULL, '2020-01-01', NULL, NULL),
  (2, 'Staff', 'Manager', '2020-01-01', '2023-01-01', 'Promotion'),
  (3, 'Engineer', NULL, '2020-01-01', NULL, NULL),
  (4, 'Architect', NULL, '2020-01-01', NULL, NULL),
  (5, 'Designer',NULL, '2020-01-01', NULL, NULL);


-- Sample data for `contacts` table
INSERT INTO contacts (user_id, contact_person, contact_phone_number) VALUES 
  (1, 'Contact1', '0891234567'),
  (2, 'Contact2', '0892345678'),
  (3, 'Contact3', '0893456789'),
  (4, 'Contact4', '0894567890'),
  (5, 'Contact5', '0895678901');

-- Sample data for `education` table
INSERT INTO education (user_id, education_level, university, faculty, major, year, gpa) VALUES 
  (1, 'Bachelor', 'Chulalongkorn University', 'Engineering', 'Computer Engineering', 2017, 3.5),
  (2, 'Master', 'Thammasat University', 'Business Administration', 'MBA', 2010, 3.8),
  (3, 'Bachelor', 'Kasetsart University', 'Science', 'Computer Science', 2015, 3.6),
  (4, 'Bachelor', 'Mahidol University', 'Architecture', 'Architecture', 2013, 3.7),
  (5, 'Bachelor', 'Chiang Mai University', 'Fine Arts', 'Graphic Design', 2010, 3.4);

-- Sample data for `documents` table
INSERT INTO documents (user_id, resume_data, certi_data, hr_data, idcard_data, photo_data) VALUES 
  (1, 'resume_data1', 'certi_data1', 'hr_data1', 'idcard_data1', 'photo_data1'),
  (2, 'resume_data2', 'certi_data2', 'hr_data2', 'idcard_data2', 'photo_data2'),
  (3, 'resume_data3', 'certi_data3', 'hr_data3', 'idcard_data3', 'photo_data3'),
  (4, 'resume_data4', 'certi_data4', 'hr_data4', 'idcard_data4', 'photo_data4'),
  (5, 'resume_data5', 'certi_data5', 'hr_data5', 'idcard_data5', 'photo_data5');

-- Sample data for `salaries` table
INSERT INTO salaries (user_id, salary) VALUES 
  (1, 30000.00),
  (2, 50000.00),
  (3, 35000.00),
  (4, 40000.00),
  (5, 37000.00);

-- Sample data for `candidate_followup` table
INSERT INTO candidate_followup (user_id, status, followup_date, notes) VALUES 
  (1, 'new', NOW(), 'Note1'),
  (2, 'short_list', NOW(), 'Note2'),
  (3, 'test', NOW(), 'Note3'),
  (4, 'interviewed', NOW(), 'Note4'),
  (5, 'hire', NOW(), 'Note5');

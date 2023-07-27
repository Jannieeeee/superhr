use superhr;
select * from users join candidate_followup;
select * from  candidate_followup;
select * from users;
select * from education;

SELECT users.*, positions.position_1 ,candidate_followup.*
    FROM users 
     JOIN positions ON users.id = positions.user_id 
    JOIN candidate_followup ON users.id = candidate_followup.user_id ;

SELECT *
    FROM users 
	JOIN positions
    ON users.id = positions.user_id
    JOIN candidate_followup
    ON users.id = candidate_followup.user_id;
    
    
    
    SELECT * 
FROM users 
LEFT JOIN addresses ON users.id = addresses.user_id
LEFT JOIN positions ON users.id = positions.user_id
LEFT JOIN contacts ON users.id = contacts.user_id
LEFT JOIN education ON users.id = education.user_id
LEFT JOIN documents ON users.id = documents.user_id
LEFT JOIN salaries ON users.id = salaries.user_id
LEFT JOIN candidate_followup ON users.id = candidate_followup.user_id;


select * from users;
select * from positions;
select * from candidate_followup;

SELECT * FROM users 
    JOIN positions ON users.id = positions.user_id 
    JOIN candidate_followup ON users.id = candidate_followup.user_id 
    Where users.id = 1;
    
    
    
select * from createPosition;
select * from NearTransport;
select * from TestAssessmentCriteria;
select * from InterviewAssessmentCriteria;

select * from  candidate_followup;
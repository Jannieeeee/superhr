use superhr;
select * from users join candidate_followup;
select * from  candidate_followup;
select * from users;
select * from education;


UPDATE candidate_followup
SET status = 'test'
WHERE id = 1;


    
select * from followup_test_questions;
select * from CreatePosition;


select * from users;
select * from positions;
select * from candidate_followup;

SELECT * FROM candidate_detail LEFT JOIN followup_test_questions ft ON ft.followup_id = id WHERE  status != 'cancel';
    
select * from createPosition;
select * from NearTransport;
select * from TestAssessmentCriteria;
select * from InterviewAssessmentCriteria;

select * from  candidate_followup;

SET SQL_SAFE_UPDATES = 0;
UPDATE candidate_followup
SET status = 'pass'
WHERE status  = "hire";

UPDATE users
SET role = 'admin'
WHERE id  = "1";

SELECT * FROM ScheduleInterview;

select * from candidate_detail LEFT JOIN users ON user_id = users.id;

select * from candidate_detail;
select * from testjob tj left join followup_test_questions ft on ft.followup_id = tj.followup_id;


SELECT * FROM ScheduleInterview WHERE followup_id = 2;
SELECT * FROM ContractDetail;


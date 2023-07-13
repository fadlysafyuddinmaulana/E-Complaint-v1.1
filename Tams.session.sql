-- create or replace trigger after_insert_comp
-- 	after insert on tb_complaint for each row
-- 	begin
-- 		insert into tb_log_complaint (NIM,Keluhan,Saran,File,Waktu_Upload) values (new.NIM,new.Keluhan,new.Saran,new.File,now()); 
-- 	end

show tables
UPDATE tbl_student
    SET student_cgpa = CASE student_roll_no
        
        WHEN 1302002 THEN '313'
        WHEN 1302003 THEN '266'
       
        
        
        WHEN 1302006 THEN '264'
        WHEN 1302007 THEN '296'
        WHEN 1302008 THEN '344'
        WHEN 1302009 THEN '273'
        WHEN 1302010 THEN '263'
        WHEN 1302011 THEN '276'
        WHEN 1302013 THEN '350'
        WHEN 1302013 THEN '326'
        WHEN 1302014 THEN '301'
       
        WHEN 1302017 THEN '309'
        WHEN 1302018 THEN '289'
        WHEN 1302019 THEN '301'
        WHEN 1302020 THEN '340'
        WHEN 1302021 THEN '299'
        WHEN 1302022 THEN '318'
        WHEN 1302023 THEN '351'
        WHEN 1302024 THEN '272'
        WHEN 1302025 THEN '352'
        WHEN 1302027 THEN '250'
        
        WHEN 1302028 THEN '283'
        WHEN 1302030 THEN '252'
        
        
        
        WHEN 1302031 THEN '310'
        WHEN 1302032 THEN '282'
        WHEN 1302033 THEN '282'
        WHEN 1302035 THEN '262'
        WHEN 1302036 THEN '388'
        WHEN 1302037 THEN '331'
       
        WHEN 1302039 THEN '363'
        WHEN 1302040 THEN '307'
        
        WHEN 1302042 THEN '367'
        WHEN 1302043 THEN '371'
        WHEN 1302044 THEN '270'
        WHEN 1302045 THEN '277'
        
        WHEN 1302047 THEN '334'
        WHEN 1302048 THEN '351'
        WHEN 1302049 THEN '282'
        WHEN 1302052 THEN '296'
        WHEN 1302053 THEN '288'
        WHEN 1302054 THEN '257'
        WHEN 1302055 THEN '278'
        WHEN 1302056 THEN '294'
        WHEN 1302057 THEN '352'
        WHEN 1302058 THEN '255'
        WHEN 1302059 THEN '279'
       
        WHEN 1302062 THEN '327'
        WHEN 1302063 THEN '272'
        WHEN 1302064 THEN '283'
        WHEN 1302065 THEN '284'
       
        WHEN 1102003 THEN '274'
        WHEN 1102044 THEN '302'
        WHEN 1102052 THEN '324'
        
       
       
    END
WHERE student_roll_no IN (1302002,1302003,1302006,1302007,1302008,1302009,1302010,1302011,1302013,1302013,1302014,1302017,
1302018,1302019,1302020,1302021,1302022,1302023,1302024,1302025,1302027,1302028,1302030,1302031,1302032,1302033,1302035,1302036,1302037,
1302039,1302040,1302042,1302043,1302044,1302045,1302047,1302048,1302049,1302052,1302053,1302054,1302055,1302056,1302057,
1302058,1302059,1302062,1302063,1302064,1302065,
1102003,1102044,1102052);



UPDATE tbl_student
    SET student_cgpa = CASE student_roll_no
        
        WHEN 1302002 THEN '3.216'
        WHEN 1302003 THEN '3.121'
        WHEN 1302004 THEN '3.473'
	 WHEN 1302005 THEN '2.63'
       
        
        
       
        WHEN 1302007 THEN '3.082'
       
        WHEN 1302009 THEN '2.476'
        WHEN 1302010 THEN '2.353'
        WHEN 1302011 THEN '2.750'
       
        WHEN 1302013 THEN '3.067'
        WHEN 1302014 THEN '2.762'
       
      
        WHEN 1302018 THEN '3.045'
       
        WHEN 1302020 THEN '2.977'
       
        WHEN 1302024 THEN '2.544'
        WHEN 1302025 THEN '3.108'
	 WHEN 1302026 THEN '2.448'
        WHEN 1302027 THEN '3.222'
        
        WHEN 1302028 THEN '2.972'
        WHEN 1302030 THEN '3.282'
        
        
        
       
        WHEN 1302032 THEN '2.743'
      
        WHEN 1302035 THEN '2.411'
        WHEN 1302036 THEN '3.074'
        WHEN 1302038 THEN '2.598'
       
        WHEN 1302039 THEN '2.629'
        WHEN 1302040 THEN '3.324'
        
        WHEN 1302042 THEN '3.043'
        WHEN 1302043 THEN '2.495'
       
        WHEN 1302045 THEN '2.693'
        
        WHEN 1302047 THEN '2.983'
      
        WHEN 1302050 THEN '3.048'
	WHEN 1302051 THEN '2.766'
        WHEN 1302052 THEN '2.613'
        WHEN 1302053 THEN '2.748'
        WHEN 1302054 THEN '2.931'
        WHEN 1302055 THEN '2.959'
        WHEN 1302056 THEN '2.776'
        WHEN 1302057 THEN '3.563'
        WHEN 1302058 THEN '3.096'
        WHEN 1302059 THEN '2.748'
	 WHEN 1302060 THEN '3.146'
	 WHEN 1302061 THEN '2.650'
       
        WHEN 1302062 THEN '2.659'
        
        WHEN 1302065 THEN '3.277'
        WHEN 1302066 THEN '2.799'
	 WHEN 1302067 THEN '2.779'
	 WHEN 1302068 THEN '3.566'
       
        WHEN 1302069 THEN '3.014'
        WHEN 1302070 THEN '2.762'
      
       
       
    END
WHERE student_roll_no IN (1302002,1302003,1302004,1302005,1302007,1302009,1302010,1302011,1302013,1302014,1302018,
1302020,1302024,1302025,1302026,1302027,1302028,1302030,1302032,1302035,1302036,1302038,1302039,1302040,
1302042,1302043,1302045,1302047,1302050,1302051,1302052,1302053,1302054,1302055,1302056,1302057,1302058,1302059,1302060,

1302061,1302062,1302065,1302066,1302067,1302068,1302069,1302070);
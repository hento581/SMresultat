<?php 
		
		
		$winsplits = 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=';
		
		
		
		$con = mysql_connect("localhost","ol4an","ololol4an");  
		mysql_select_db("results", $con);		
		
		//Stafett
		
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM stafett 2012', 
					'{$winsplits}23041', 2012, 1);");
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM stafett 2011', 
					'{$winsplits}18660', 2011, 1);");
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM stafett 2010', 
					'{$winsplits}15161', 2010, 1);");
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM stafett 2009', 
					'{$winsplits}12671', 2009, 1);");
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM stafett 2008', 
					'{$winsplits}10482', 2008, 1);");			
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM stafett 2007', 
					'{$winsplits}8474', 2007, 1);");
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM stafett 2006', 
					'{$winsplits}6718', 2006, 1);");
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM stafett 2005', 
					'{$winsplits}5253', 2005, 1);");	
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM budkavle 2004', 
					'{$winsplits}3731', 2004 , 1);");					
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM budkavle 2003', 
					'{$winsplits}2889', 2003, 1);");			
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM budkavle 2002', 
					'{$winsplits}2016', 2002, 1);");	
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM budkavle 2001', 
					'{$winsplits}1292', 2001, 1);");					
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM budkavle 2000', 
					'{$winsplits}633', 2000, 1);");		//Finns även seperat "per gaffling (634)"	
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM budkavle 1999', 
					'{$winsplits}214', 1999, 1);");	
		
					
		// lång

		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Lång 2012', 
					'{$winsplits}22926', 2012, 2);");
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Lång 2011', 
					'{$winsplits}18574', 2011, 2);");
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Lång 2010', 
					'{$winsplits}15075', 2010, 2);");
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Lång 2009', 
					'{$winsplits}12743', 2009, 2);");
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Lång 2008', 
					'{$winsplits}10412', 2008, 2);");			
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Lång 2007', 
					'{$winsplits}8419', 2007, 2);");
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Lång 2006', 
					'{$winsplits}6663', 2006, 2);");
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Lång 2005', 
					'{$winsplits}5173', 2005, 2);");
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Klassisk 2004', 
					'{$winsplits}3696', 2004, 2);");			
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Klassisk 2003', 
					'{$winsplits}2841', 2003, 2);");			
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Klassisk 2002', 
					'{$winsplits}1983', 2002, 2);");	
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Klassisk 2001', 
					'{$winsplits}1280', 2001, 2);");			
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Klassisk 2000', 
					'{$winsplits}610', 2000, 2);");			
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Klassisk 1999', 
					'{$winsplits}207', 1999, 2);");	
		mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Klassisk 1998', 
					'{$winsplits}39', 1998, 2);");	

	
	
		//Medel
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Medel 2012','{$winsplits}22926', 2012, 3);"); 
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Medel 2011','{$winsplits}18574', 2011, 3);");
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Medel 2010','{$winsplits}15075', 2010, 3);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Medel 2009','{$winsplits}12743', 2009, 3);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Medel 2008','{$winsplits}10412', 2008, 3);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Medel 2007','{$winsplits}8419', 2007, 3);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Medel 2006','{$winsplits}6663', 2006, 3);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Medel 2005','{$winsplits}5173', 2005, 3);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Kort 2004','{$winsplits}3696', 2004, 3);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Kort 2003','{$winsplits}2841', 2003, 3);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Kort 2002','{$winsplits}1983', 2002, 3);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Kort 2001','{$winsplits}1280', 2001, 3);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Kort 2000','{$winsplits}610', 2000, 3);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Kort 1999','{$winsplits}207', 1999, 3);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Kort 1998','{$winsplits}39', 1998, 3);");  


						
		//Sprint
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Sprint 2013','{$winsplits}24990', 2013, 4);"); 
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Sprint 2012','{$winsplits}22482', 2012, 4);"); 
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Sprint 2011','{$winsplits}16663', 2011, 4);");
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Sprint 2010','{$winsplits}14116', 2010, 4);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Sprint 2009','{$winsplits}9655', 2009, 4);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Sprint 2008','{$winsplits}9373', 2008, 4);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Sprint 2007','{$winsplits}7435', 2007, 4);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Sprint 2006','{$winsplits}6746', 2006, 4);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Sprint 2005','{$winsplits}4700', 2005, 4);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Sprint 2004','{$winsplits}3443', 2004, 4);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Sprint 2003','{$winsplits}2833', 2003, 4);");
						
						
		//Natt
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Natt 2013','{$winsplits}24968', 2013, 5);"); 
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Natt 2012','{$winsplits}22449', 2012, 5);"); 
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Natt 2011','{$winsplits}16637', 2011, 5);");
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Natt 2010','{$winsplits}13884', 2010, 5);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Natt 2009','{$winsplits}13005', 2009, 5);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Natt 2008','{$winsplits}9286', 2008, 5);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Natt 2007','{$winsplits}7416', 2007, 5);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Natt 2006','{$winsplits}6688', 2006, 5);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Natt 2005','{$winsplits}5209', 2005, 5);");  
					//	mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Natt 2004','{$winsplits}__', 2004, 5);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Natt 2003','{$winsplits}2856', 2003, 5);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Natt 2002','{$winsplits}1586', 2002, 5);");  
					//	mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Natt 2001','{$winsplits}__', 2001, 5);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Natt 2000','{$winsplits}624', 2000, 5);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Natt 1999','{$winsplits}213', 1999, 5);");  
					//	mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Natt 1998','{$winsplits}__', 1998, 5);"); 
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Natt 1997','{$winsplits}4', 1997, 5);"); 
				

		//Ultra
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Ultra 2013','{$winsplits}24905', 2013, 6);"); 
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Ultra 2012','{$winsplits}23118', 2012, 6);"); 
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Ultra 2011','{$winsplits}18855', 2011, 6);");
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Ultra 2010','{$winsplits}13777', 2010, 6);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Ultra 2009','{$winsplits}12256	', 2009, 6);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Ultra 2008','{$winsplits}9974', 2008, 6);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Ultra 2007','{$winsplits}7335', 2007, 6);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Ultra 2006','{$winsplits}6754', 2006, 6);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Ultra 2005','{$winsplits}4738', 2005, 6);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Lång 2004','{$winsplits}3454', 2004, 6);");  
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Lång 2003','{$winsplits}2294', 2003, 6);");
							//OBS prolog+jaktstart:
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Lång 2002','{$winsplits}1511', 2002, 6);"); 
						
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Lång 2001','{$winsplits}1315', 2001, 6);");  
							//OBS prolog+jaktstart:
						mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Lång 2000','{$winsplits}346', 2000, 6);"); 
						
					//	mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Lång 1999','{$winsplits}__', 1999, 6);");  
					//	mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Lång 1998','{$winsplits}__', 1998, 6);"); 
					//	mysql_query("INSERT INTO `results`.`competition` (`id`, `name`, `link`, `year`, `type`) VALUES (NULL, 'SM Lång 1997','{$winsplits}_', 1997, 6);"); 
		?>
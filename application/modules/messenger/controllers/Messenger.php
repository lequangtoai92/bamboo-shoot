<?php   
        
        $ham_layds_truyencotich = "SELECT * FROM CT100 ORDER BY CT156 DESC Orders LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
        $ham_layds_truyen_theocd = "SELECT * FROM BV100 WHERE BV151 =" . $data['BV151'] . " ORDER BY BV155 DESC Orders LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
        
        $ham_layds_truyen_theocd_admin = "SELECT * FROM BV100 WHERE BV151 =" . $data['BV151'] . " ORDER BY BV155 DESC Orders LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
        $ham_layds_TK_admin = "SELECT * FROM TK100 ORDER BY KT158 DESC Orders LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];

        $ham_update_tb = "UPDATE TB100 SET TB152 =" . $data['TB152'] . "WHERE TB100 =" . $data['TB100'];
        $ham_lay_tn = "SELECT * FROM TN100 WHERE TK101=" . $data['TK100'] . " OR TK102=" . $data['TK100'] . "ORDER BY TN151 DESC Orders LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
        $ham_lay_TB = "SELECT * FROM TB100 WHERE TK100=" . $data['TK100'] . "ORDER BY TB151 DESC Orders LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
        $ham_insert_tn = "INSERT INTO TN100 (TK101, TK102, TN150) VALUES (" . $data['TK101'] . "," . $data['TK102'] . "," . $data['TN150'] . ")";
        $ham_insert_tb = "INSERT INTO TB100 (TK100, TB150, TB152) VALUES (" . $data['TK100'] . "," . $data['TB150'] . "," . $data['TB152'] . ")";

        $ham_laynoidung_truyen = "SELECT * FROM ND100 WHERE BV100=" . $data['BV100'];

        $ham_update_hay = "UPDATE DG100 SET DG150 = DG150 + 1 ,
                        DG151 = CONCAT(DG151," . $data['TK100'] . ") 
                        WHERE BV100 =" . $data['BV100'];
        $ham_update_chan = "UPDATE DG100 SET DG152 = DG152 + 1 , 
                        DG153 = CONCAT(DG153," . $data['TK100'] . ") 
                        WHERE BV100 =" . $data['BV100'];

        $ham_updata_binhluan = "UPDATE BL100 SET BL155 =" . $data['BL155'] . "WHERE BL100 =" . $data['BL100'];
        $ham_binh_luan = "INSERT INTO BL100 (BV100, TK100, BL150, BL152, BL153, BL154, BL155) 
                        VALUES (" . $data['BV100'] . "," . $data['TK100'] . "," . $data['BL150'] . "," . $data['BL152'] . 
                        "," . $data['BL153'] . "," . $data['BL154'] . "," . $data['BL155'] . ")";

        $ham_laynoidung_truyen = "SELECT * FROM ND100 WHERE BV100=" . $data['BV100'];
        $ham_layds_truyendaviet = "SELECT * FROM BV100 WHERE TK100=" . $data['TK100'] . "ORDER BY BV155 DESC Orders LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
        $ham_updata_sach_admin = "UPDATE KD100 SET KD150 =" . $data['KD150'] . "WHERE KD100 =" . $data['KD100'];
        $ham_updata_sach = "UPDATE BV100 
                                SET BV150 =" . $data['BV150'] . "," .
                                    "BV151 =" . $data['BV151'] . "," .
                                    "BV152 =" . $data['BV152'] . "," .
                                    "BV153 =" . $data['BV153'] . "," .
                                    "BV154 =" . $data['BV154'] . "," .
                                    "BV156 =" . $data['BV156'] . "," .
                                    "BV157 =" . $data['BV157'] . "," .
                                    "BV158 =" . $data['BV158'] .
                                "WHERE BV100 =" . $data['BV100'];
        $ham_laythontinsach = "SELECT * FROM BV100 WHERE BV100=" . $data['BV100'];
        $ham_taomoi_sach = "INSERT INTO BV100 (TK100, BV150, BV151, BV152, BV153, BV154, BV156, BV157, BV158) 
                        VALUES (" . $data['TK100'] . "," . $data['BV150'] . "," . $data['BV151'] . "," . $data['BV152'] .
                            "," . $data['BV153'] ."," . $data['BV154'] ."," . $data['BV156'] . "," . $data['BV157'] .
                            "," . $data['BV158'] .")";
        $ham_taomoi_noidung = "INSERT INTO ND100 (ND150) VALUES (" . $data['ND150'] . ")";
        $ham_taomoi_danhgia = "INSERT INTO DG100 (DG150, DG151, DG152, DG153, DG154, DG155, DG156) 
                            VALUES (0, '', 0, '', 0, 0, '')";
        $ham_taomoi_kiemduyet = "INSERT INTO KD100 (TK100, KD150) 
                            VALUES (0, 0)";

        $ham_updata_gopy = "UPDATE GY100 SET GY152 =" . $data['GY152'] . "WHERE GY100 =" . $data['GY100'];
        $ham_laylistgoyy = "SELECT * FROM GY100 ORDER BY GY151 DESC Orders LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
        $ham_insert_gopy = "INSERT INTO GY100 (TK100, GY150, GY152, GY153, GY154, GY155, GY156) 
                            VALUES (" . $data['TK100'] . "," . $data['GY150'] . "," . $data['GY152'] . "," . $data['GY153'] . 
                            "," . $data['GY154'] . "," . $data['GY155'] . "," . $data['GY156'] . ")";

        $ham_updata_taikhoan_admin = "UPDATE TK100 SET TK159 =" . $data['TK159'] . "WHERE TK100 =" . $data['TK100'];
        $ham_laythontintaikhoan = "SELECT * FROM TK100 WHERE TK100=" . $data['TK100'];
        $ham_updata_taikhoan = "UPDATE TK100 
                                SET TK151 =" . $data['TK151'] . "," .
                                    "TK152 =" . $data['TK152'] . "," .
                                    "TK153 =" . $data['TK153'] . "," .
                                    "TK154 =" . $data['TK154'] . "," .
                                    "TK155 =" . $data['TK155'] . "," .
                                    "TK156 =" . $data['TK156'] . "," .
                                    "TK157 =" . $data['TK157'] . "," .
                                    "TK159 =" . $data['TK159'] .
                                "WHERE TK100 =" . $data['TK100'];

                                
        $ham_dangky = "INSERT INTO TK100 (TK151, TK152, TK153, TK154, TK155, TK156, TK157, TK159) 
                        VALUES (" . $data['TK151'] . "," . $data['TK152'] . "," . $data['TK153'] . "," . $data['TK154'] .
                            "," . $data['TK155'] ."," . $data['TK156'] ."," . $data['TK157'] ."," . $data['TK159'] .")";
        $ham_check_insert_login = "SELECT * FROM LI100 WHERE LI150=" . $data['LI150'] . " LIMIT 1";
        $ham_insert_login = "INSERT INTO LI100 (LI150, LI151, LI152) VALUES (" . $data['LI150'] . "," . $data['LI151'] . "," . $data['LI152'] . ")";
        $ham_updata_login_admin = "UPDATE LI100 SET LI152 =" . $data['LI152'] . "WHERE LI100 =" . $data['LI150'];
        $ham_updata_matkhau = "UPDATE LI100 SET LI151 =" . $data['LI151'] . "WHERE LI100 =" . $data['LI150'];

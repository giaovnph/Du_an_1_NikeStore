<?php
        function loadall_taikhoan(){
            $sql = "select * from taikhoan order by id desc";
            $listdanhmuc=pdo_query($sql);
            return $listdanhmuc;
        }

        function insert_taikhoan($email, $user, $pass, $sdt){
            $sql="insert into taikhoan(email, username, password, sdt) values('$email','$user','$pass','$sdt')";
            pdo_execute($sql);
        }

        function kttaikhoan($user, $pass){
            $sql="select * from taikhoan where username='".$user."' AND password='".$pass."'";
            $tk=pdo_query_one($sql);
            return $tk;
        }

        function ktemail($email){
            $sql="select * from taikhoan where email='".$email."'";
            $tk=pdo_query_one($sql);
            return $tk;
        }

        function update_taikhoan($id, $email, $user, $pass, $diachi, $sdt){
            $sql="update taikhoan set email='".$email."', username='".$user."', password='".$pass."', diachi='".$diachi."', sdt='".$sdt."' where id =".$id;
            pdo_execute($sql);
        }
?>
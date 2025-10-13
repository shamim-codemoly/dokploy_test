CREATE DATABASE molyecom_pro;
CREATE DATABASE bebshadar_pro;
CREATE DATABASE shohojponno_db;

CREATE USER 'laravel_api_user'@'%' IDENTIFIED WITH mysql_native_password BY '12345678';

GRANT ALL ON laravel_api.* TO 'laravel_api_user'@'%';

FLUSH PRIVILEGES;


============================================
CREATE USER 'laravel1'@'%' IDENTIFIED BY 'StrongPass$$665!';
GRANT ALL PRIVILEGES ON laravel1_db.* TO 'laravel1'@'%';
FLUSH PRIVILEGES;

========================================
-- Create databases
CREATE DATABASE molyecom_pro;
CREATE DATABASE molyecom_dev;
CREATE DATABASE bebshadar_pro;
CREATE DATABASE shohojponno_db;
CREATE DATABASE sutbmdc_db;
CREATE DATABASE laravel1_db;

CREATE DATABASE molylean_dev_db;
CREATE DATABASE molylean_pro_db;

-- Create user (only run once)
CREATE USER 'codemoly'@'%' IDENTIFIED WITH mysql_native_password BY '@cOde$$2909';

-- Grant privileges on all 3 databases
GRANT ALL PRIVILEGES ON molyecom_pro.* TO 'codemoly'@'%';
GRANT ALL PRIVILEGES ON molyecom_dev.* TO 'codemoly'@'%';
GRANT ALL PRIVILEGES ON bebshadar_pro.* TO 'codemoly'@'%';
GRANT ALL PRIVILEGES ON shohojponno_db.* TO 'codemoly'@'%';
GRANT ALL PRIVILEGES ON sutbmdc_db.* TO 'codemoly'@'%';

GRANT ALL PRIVILEGES ON molylean_dev_db.* TO 'codemoly'@'%';
GRANT ALL PRIVILEGES ON molylean_pro_db.* TO 'codemoly'@'%';

-- Apply changes
FLUSH PRIVILEGES;

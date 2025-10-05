CREATE DATABASE molyecom_pro;
CREATE DATABASE bebshadar_pro;
CREATE DATABASE shohojponno_db;

CREATE USER 'laravel_api_user'@'%' IDENTIFIED WITH mysql_native_password BY '12345678';

GRANT ALL ON laravel_api.* TO 'laravel_api_user'@'%';

FLUSH PRIVILEGES;





-- Create databases
CREATE DATABASE molyecom_pro;
CREATE DATABASE bebshadar_pro;
CREATE DATABASE shohojponno_db;
CREATE DATABASE sutbmdc_db;

-- Create user (only run once)
CREATE USER 'codemoly'@'%' IDENTIFIED WITH mysql_native_password BY '@cOde$$2909';

-- Grant privileges on all 3 databases
GRANT ALL PRIVILEGES ON molyecom_pro.* TO 'codemoly'@'%';
GRANT ALL PRIVILEGES ON bebshadar_pro.* TO 'codemoly'@'%';
GRANT ALL PRIVILEGES ON shohojponno_db.* TO 'codemoly'@'%';
GRANT ALL PRIVILEGES ON sutbmdc_db.* TO 'codemoly'@'%';

-- Apply changes
FLUSH PRIVILEGES;

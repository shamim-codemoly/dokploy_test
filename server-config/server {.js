server {
    listen 80 default_server;
    server_name _;

    location / {
        proxy_pass http://127.0.0.1:3000;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
        proxy_http_version 1.1;
        proxy_set_header Connection "";
        proxy_buffering off;
    }
}

server {
    listen 443 ssl;
    server_name www.sobaragaybangladesh.com sobaragaybangladesh.com;

    ssl_certificate /etc/letsencrypt/live/sobaragaybangladesh.com/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/sobaragaybangladesh.com/privkey.pem;
    include /etc/letsencrypt/options-ssl-nginx.conf;
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem;

    location / {
        proxy_pass http://127.0.0.1:3000;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
        proxy_http_version 1.1;
        proxy_set_header Connection "";
        proxy_buffering off;
    }
}

server {
    listen 443 ssl;
    server_name www.monirulshawn.com monirulshawn.com;

    ssl_certificate /etc/letsencrypt/live/monirulshawn.com/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/monirulshawn.com/privkey.pem;
    include /etc/letsencrypt/options-ssl-nginx.conf;
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem;

    location / {
        proxy_pass http://127.0.0.1:3000;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
        proxy_http_version 1.1;
        proxy_set_header Connection "";
        proxy_buffering off;
    }
}

mysql://mysql:Ty08XpTIDZJZlWrCk7YN3MRH8CIUlcGSM5llgm3utePqKS9GoesyED3VFL4Lld1n@:/
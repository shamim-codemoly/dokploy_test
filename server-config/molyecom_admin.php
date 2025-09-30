server {
    listen 80;
    server_name admin.molyecom.com;
}

server {
    server_name admin.molyecom.com;

    location / {
        proxy_pass http://127.0.0.1:3001;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
        proxy_http_version 1.1;
        proxy_set_header Connection "";
    }
}



server {
    listen 80;
    server_name admin.molyecom.com;
    return 301 https://$host$request_uri;
}

server {
    listen 443 ssl;
    server_name admin.molyecom.com;

    ssl_certificate /etc/letsencrypt/live/admin.monirulshawn.com/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/admin.monirulshawn.com/privkey.pem;
    include /etc/letsencrypt/options-ssl-nginx.conf;
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem;

    location / {
        proxy_pass http://127.0.0.1:3001;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
        proxy_http_version 1.1;
        proxy_set_header Connection "";
    }
}




BASE_URL=https://api.molyecom.com/api/v1
SUCCESS_RATE_URL=https://cc.bebshadar.com/api/codemoly/fraud-check
SUCCESS_RATE_API_KEY=Y29kZW1vbHl8c2h5bW9saXxpdC1zZXJ2aWNlIHByb3ZpZGVyfHppai1iYW5haWNoZQ==
NEXT_PUBLIC_WEB_HOOK_BASE_URL=https://api.molyecom.com/
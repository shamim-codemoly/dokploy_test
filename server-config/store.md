server {
    listen 80;
    
    server_name monirulshawn.com *.monirulshawn.com;
    
    server_name ~^(?!www\.).*;
    
    location / {
        proxy_pass http://127.0.0.1:3000;  # Next.js app
        proxy_http_version 1.1;
        proxy_set_header Upgrade $http_upgrade;
        proxy_set_header Connection 'upgrade';
        proxy_set_header Host $host;        # Very important! Keeps original domain
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
        proxy_cache_bypass $http_upgrade;
    }
}

sudo ln -s /etc/nginx/sites-available/store /etc/nginx/sites-enabled/

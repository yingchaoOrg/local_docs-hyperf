FROM nginx:1.24.0

# /usr/share/nginx/html
RUN mkdir -p /usr/share/nginx/html/3.1
RUN mkdir -p /usr/share/nginx/html/master
COPY docs /usr/share/nginx/html/3.1
# ghcr.io/yingchaoorg/local_docs-hyperf-docs:master
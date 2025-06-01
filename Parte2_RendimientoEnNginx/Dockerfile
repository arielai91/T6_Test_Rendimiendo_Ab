FROM ubuntu:20.04

ENV DEBIAN_FRONTEND=noninteractive

RUN apt update && \
    apt install -y apache2-utils curl && \
    apt clean && \
    rm -rf /var/lib/apt/lists/*

CMD ["bash"]
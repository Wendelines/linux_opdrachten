syslog-ng install en configureer:
  pkg.installed:
    - names:
      - syslog-ng
      - lynx
      - apache2

file.directory:
  - name: /var/www/wendy
  - user: root
  - groep: root
  - mode: 755

file 1:
  file.managed:
    - name: /etc/syslog-ng/syslog-ng.conf
    - source: salt://syslog.conf

service.running:
  - names:
    - syslog-ng
    - apache2
    - reload: True

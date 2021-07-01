nagios installeren en configureren:
  file.managed:
    - template: jinja
    - name: /etc/{{ grains.id }}.cfg

directory aanmaken:
  file.directory:
    - name: /etc/nagios_conf

configfile script:
  file.managed:
    - name: /tmp/nagios_conf.sh
    - source: salt://nagios_conf.sh
    - mode: 755
  cmd.run:
    - name: /tmp/nagios_conf.sh

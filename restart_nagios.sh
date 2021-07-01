#! /bin/bash

cp /var/cache/salt/master/minions/*/files/etc/nagios_conf/* /usr/local/nagios/etc/servers

systemctl restart nagios

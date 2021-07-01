#! /bin/bash

hostnaam=$(hostname)
host_ip=$(hostname -I)


cat > /etc/$hostnaam.cfg << EOF

define host {
  uselinux-server
  host_name   $hostnaam
  alias       $hostnaam
  address     $host_ip
  max_check_attempts5
  check_period24x7
  notification_interval30
  notification_period24x7
}

define service {
  usegeneric-service
  host_name     $hostnaam
  service_descriptionLoad average
  check_commandcheck_nrpe!check_load
}

define service {
  usegeneric-service
  host_name     $hostnaam
  service_description/dev/vda1 free space
  check_commandcheck_nrpe!check_vda1
}

EOF

cp /etc/$hostnaam.cfg /etc/nagios_conf/$hostnaam.cfg

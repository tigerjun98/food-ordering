#!/bin/bash
# https://aws.amazon.com/premiumsupport/knowledge-center/elastic-beanstalk-env-variables-linux2/

#Create a copy of the environment variable file.
cp /opt/elasticbeanstalk/deployment/env /opt/elasticbeanstalk/deployment/laravel_env

#Set permissions to the custom_env_var file so this file can be accessed by any user on the instance. You can restrict permissions as per your requirements.
chmod 644 /opt/elasticbeanstalk/deployment/laravel_env

#Remove duplicate files upon deployment.
rm -f /opt/elasticbeanstalk/deployment/*.bak

# Enable the workers
systemctl enable laravel_queue_worker@{1..3}.service

# Restart the workers
systemctl restart laravel_queue_worker@{1..3}.service

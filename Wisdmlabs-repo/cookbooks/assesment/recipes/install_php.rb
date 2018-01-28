execute 'Install php' do
	command 'sudo apt-get install php-fpm php-mysql -y'
end

service 'php7.0-fpm' do
	action :restart
end

cookbook_file '/etc/nginx/sites-available/default' do
	source 'default'
end

service 'nginx' do
	action :reload
end

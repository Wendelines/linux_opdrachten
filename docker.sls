installeer docker:
  pkg.installed:
    - name: docker.io


dock er aan:
  cmd.run:
    - name: 'docker run hello-world'
    - runas: root

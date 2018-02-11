import subprocess

# refer http://blog.prophet.jp/1232
cmd_str = "ffmpeg -f v4l2 -framerate 25 -video_size 640x480 -i /dev/video0 -f mpegts -codec:v mpeg1video -s 640x480 -b:v 1000k -bf 0 -muxdelay 0.001 http://localhost:8081/supersecret > /dev/null 2>&1 </dev/null"
p = subprocess.Popen(cmd_str, stdout=subprocess.PIPE, shell=True)
p.wait()

os.pullEvent = os.pullEventRaw
local locker = true
local failed = true
local attempted_login = true
local password_server = 0 -- change to the ID of your password server computer
rednet.open("left") -- change to the side your rednet modem is on
while locker do
 attempted_login = false
 term.clear()
 term.setCursorPos(1,1)
 print("Welcome to a USERS PC : Roaming Profile Enabled")
 print("What would you like to do?")
 print("[1] Login (*)")
 print("[2] Shutdown")
 write("> ")
 local input = read()
 if input == "2" then
  os.shutdown()
 elseif input == "1" then
  attempted_login = true
  print("Please login...")
  write("Username: ")
  local username = read()
  write("Password: ")
  local password = read("*")
  rednet.send(password_server, username, true)
  senderId, message, distance = rednet.receive(5)
  if password == message then
   failed = false
   locker = false
   term.clear()
   term.setCursorPos(1,1)
   print("Welcome ", username)
  else
   print("Invalid Username or Password.")
   sleep(3)
  end
 else
  print("Command not recognised...")
  sleep(2)
 end
end

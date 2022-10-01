import email
from pydoc import doc
from ssl import _PasswordType


class Account:
     id = int 
     name = str
     document = str
     email = str 
     password = str

     def __init__(self, name, document, id, email, password):
          self.id = id
          self.name = name
          self.document = document
          self.email = email
          self.password = password
           
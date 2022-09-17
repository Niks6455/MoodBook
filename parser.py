from bs4 import BeautifulSoup
import requests
def overwrite(name): pass # прототип функции
def parser(url,teg1,class1,teg2,class2): pass

count = 0
masName = []
masCount = []

def overwrite(masName, masCount): # функция перезаписи файла html
	print("Функция запущена")
	file = open("D:/WebsiteProgect/modbook/index/book.html", 'r', encoding = "utf-8")

	s = file.readlines()
	for j in range(len(masCount)):
		print(s[masCount[j]])
		s[masCount[j]] = '                                        <div class="book__price">' + masName[j] + '</div>\n'
	file.close()

	file1 = open("D:/WebsiteProgect/modbook/index/book.html", 'w', encoding = "utf-8")
	file1.write("")
	file1.close()

	file2 = open("D:/WebsiteProgect/modbook/index/book.html", 'a', encoding = "utf-8")
	for i in range(len(s)):
		file2.write(s[i])
	file2.close()


	file = open("D:/WebsiteProgect/modbook/index/book.html", 'r', encoding = "utf-8")
	s = file.readlines()
	j = 0
	for j in range (len(masCount)):
		print(s[masCount[j]])
	file.close()



def parser(url,teg1,class1,teg2,class2,count): # функция которая парсит цены
	response = requests.get(url) # для получения ответа от сайта используем эту функцию
								# по сути мы получим сырой код страницы при выводе этой функции на экран
	#print(response.text) # выводим на экран весть html код страницы
	soup = BeautifulSoup(response.text,"lxml") # бютифулсуп позволяет найти нужную информацию в коде html 
												# для этого в параметры отправим код, 
												#и специальный парсер lxml который обработает данный код и передаст в бютифул

	# для поиска по признаку используем ...
	data = soup.find(teg1, class_ = class1)
	print("\n",data)
	name = data.find(teg2, class_ = class2).text.replace("\n", "")
	# в теге div находится класс art_name, в этом классе есть art name href под тегом а
	# присвоив это все переменной name используем метод text чтобы из кода html выбрать только текст
	# так же используем Метод replace чтобы замеить переносы строки на ничего

	# чтобы получить ссылку допустим на изображение
	#foto = soup.find("div", class_ = "cover-image-wrapper")
	#url_img = foto.find("a").get("href")

	print(name)
	print(count)

	masName.append(name)
	masCount.append(count)

	

#---------------------------------
# Унесенные ветром Маргарет Митчел
#---------------------------------

# Литрес

url = "https://www.litres.ru/margaret-mitchell/unesennye-vetrom-tom-1/"
teg1 = "div"
class1 = "biblio_book_buy clicktag biblio_book_buy_btn_top"
teg2 = "span" 
class2 = "simple-price"
count = 85
parser(url,teg1,class1,teg2,class2,count)

# Лабиринт

url = "https://www.labirint.ru/books/743551/"
teg1 = "div"
class1 = "buying-pricenew-val"
teg2 = "span" 
class2 = "buying-pricenew-val-number"
count = 91
parser(url,teg1,class1,teg2,class2,count)

# Читай город

url = "https://www.chitai-gorod.ru/catalog/book/2923570/"
teg1 = "div"
class1 = "product__price"
teg2 = "div" 
class2 = "price"
count = 97
parser(url,teg1,class1,teg2,class2,count)

# Book24

url = "https://book24.ru/product/unesennye-vetrom-5530267/"
teg1 = "div"
class1 = "product-sidebar-price__main-price"
teg2 = "span" 
class2 = "app-price product-sidebar-price__price"
count = 103
parser(url,teg1,class1,teg2,class2,count)


overwrite(masName, masCount) # отправляе масивы с ценами и строками где хранятся цены, в функцию для перезаписи

//подключим необходимые библиотеки
#include <stdio.h>
#include <locale>

//репаем 2 константы – количество букв в английском и русском алфавитах
#define ENG 26
#define RUS 32

//функция шифрует текст из входного файла
void encrypt (int n)
{
	FILE *fp1, *fp2;
	fopen_s(&fp1, "input.txt", "r");//открывает входной файл “input.txt” для чтения
	fopen_s(&fp2, "output.txt", "w");//Открывает выходной файл “output.txt” для записи
	int flag;
	char c;
	c = getc(fp1);//считывает по одному символы из input.txt
	while (!feof(fp1))//функция проверяет, не достигли ли мы конца файла
	{
		flag = 0; //обработан ли текущий символ
		if (c >= 'A' && c <= 'Z')
		{
			c = c + (n % ENG);//n – количество символов, на которое сдвигать символы в тексте
			if (c > 'Z') c = 'A' + (c - 'Z') - 1;
			fprintf (fp2, "%c", c);
			flag = 1;
		}
		if (c >= 'a' && c <= 'z')
		{
			c = c + (n % ENG);
			if (c > 'z') c = 'a' + (c - 'z') - 1;
			fprintf (fp2, "%c", c);
			flag = 1;
		}
		if (c >= 'А' && c <= 'Я')
		{
			c = c + (n % RUS);
			if (c > 'Я') c = 'А' + (c - 'Я') - 1;
			fprintf (fp2, "%c", c);
			flag = 1;
		}
		if (c>='а' && c<='я')
		{
			c = c + (n % RUS);
			if (c > 'я') c = 'а' + (c - 'я') - 1;
			fprintf (fp2, "%c", c);
			flag = 1;
		}
		if (!flag) fprintf (fp2, "%c", c);
		c = getc(fp1);
	}
	fclose (fp1);
	fclose (fp2);
}

//функция расшифровки текста
void decipher (int n)
{
	FILE *fp1, *fp2;
	fopen_s(&fp1, "input.txt", "r");
	fopen_s(&fp2, "output.txt", "w");
	int flag;
	char c;
	c = getc(fp1);
	while (!feof(fp1))
	{
		flag = 0;
		if (c >= 'A' && c <= 'Z')
		{
			c = c - (n % ENG);
			if (c < 'A') c = 'Z' - ('A' - c) + 1;
			fprintf (fp2, "%c", c);
			flag = 1;
		}
		if (c >= 'a' && c <= 'z')
		{
			c = c - (n % ENG);
			if (c < 'a') c = 'z' - ('a' - c) + 1;
			fprintf (fp2, "%c", c);
			flag = 1;
		}
		if (c >= 'а' && c <= 'я')
		{
			c = c - (n % RUS);
			if (c < 'а') c = 'я' - ('а' - c) + 1;
			fprintf (fp2, "%c", c);
			flag = 1;
		}
        if (c >= 'А' && c <= 'Я')
		{
			c = c - (n % RUS);
			if (c < 'А') c = 'Я' - ('А' - c) + 1;
			fprintf (fp2, "%c", c);
			flag = 1;
		}
		if (!flag) fprintf (fp2, "%c", c);
		c = getc(fp1);
	}
	fclose (fp1);
	fclose (fp2);
}

//main функция
int main ()
{
	setlocale(LC_ALL,"Russian");//для отображения русских символов в консоли
	int n;
	printf ("Введите натуральное n: ");
	scanf_s ("%d", &n);
	getchar (); //ловит символ клавиши ENTER, нажатой при вводе числа n
	if (n < 1) return 0;
	printf ("Чтобы зашифровать текст введите a, расшифровать b: ");
	char c;
	scanf_s ("%c", &c, 1);
	if (c == 'a') encrypt (n);
	if (c == 'b') decipher (n);
	return 0;
}
#include <iostream>
#include <string>
#include <cstdlib>
#include <cassert>
using namespace std;


template<typename ItemType>
class Node
{
	private:
		ItemType item;
		Node<ItemType>* next;
	public:
		Node();
		Node(const ItemType& anItem);
		Node(const ItemType& anItem,Node<ItemType>* nextNodePtr);
		ItemType getItem()const;
		Node<ItemType>* getNext()const;
		void setNext(Node<ItemType>* nextNodePtr);
		void setItem(const ItemType& anItem);
};
template<typename ItemType>
Node<ItemType>::Node():next(NULL){
}
template<typename ItemType>
Node<ItemType>::Node(const ItemType& anItem):next(NULL),item(anItem){
}
template<typename ItemType>
Node<ItemType>::Node(const ItemType& anItem,Node<ItemType>* nextNodePtr):next(nextNodePtr),item(anItem){
}
template<typename ItemType>
void Node<ItemType>::setItem(const ItemType& anItem)
{
	item = anItem;
}
template<typename ItemType>
void Node<ItemType>::setNext(Node<ItemType>* nextNodePtr)
{
	next = nextNodePtr;
}
template<typename ItemType>
Node<ItemType>* Node<ItemType>::getNext()const
{
	return next;
}
template<typename ItemType>
ItemType Node<ItemType>::getItem()const
{
	return item;
} 
template<typename ItemType>
class StackADT
{
	public:
		virtual bool isEmpty()const=0;
		virtual bool push(const ItemType& newEntry)=0;
		virtual bool pop()=0;
		virtual ItemType peek()const=0;
};
template<typename ItemType>
class Stack:public StackADT<ItemType>
{
	private:
		Node<ItemType>* topPtr;
	public:
		Stack();
		Stack(const Stack<ItemType>& aStack);
		bool isEmpty()const;
		bool push(const ItemType& newEntry);
		bool pop();
		ItemType peek()const;
		virtual ~Stack();
};
template<typename ItemType>
Stack<ItemType>::Stack():topPtr(NULL){
}
template<typename ItemType>
Stack<ItemType>::Stack(const Stack<ItemType>& aStack)
{
	Node<ItemType>* oriChain = aStack.topPtr;
	if(oriChain == NULL)
		topPtr = NULL;
	else
	{
		topPtr = new Node<ItemType>(oriChain->getItem());
		Node<ItemType>* newChain = topPtr;
		while(oriChain->getNext() != NULL)
		{
			oriChain = oriChain->getNext();
			Node<ItemType>* newNodePtr = new Node<ItemType>(oriChain->getItem());
			newChain->setNext(newNodePtr);
			newChain = newChain->getNext();
		} 
		newChain->setNext(NULL);
	}
}
template<typename ItemType>
bool Stack<ItemType>::isEmpty()const
{
	if(topPtr == NULL)
		return true;
	else
		return false;
}
template<typename ItemType>
bool Stack<ItemType>::push(const ItemType& newEntry)
{
	Node<ItemType>* newNode = new Node<ItemType>(newEntry,topPtr);
	topPtr = newNode;
	return true;
}
template<typename ItemType>
bool Stack<ItemType>::pop()
{
	if(topPtr == NULL)
		return false;
	else
	{
		topPtr = topPtr->getNext();
		return true;
	}
}
template<typename ItemType>
ItemType Stack<ItemType>::peek()const
{
	assert(!isEmpty());
	return topPtr->getItem();
}
template<typename ItemType>
Stack<ItemType>::~Stack()
{
	while(!isEmpty())
		pop();
}
int main()
{
	char item;
	string postfix = "";
	Stack<char> operatorStack;
	while(cin >> item)
	{
		if(item == '(')
			operatorStack.push(item);
		else if(item == ')')
		{
			postfix += ' ';
			while(operatorStack.peek() != '(')
			{
				postfix += operatorStack.peek();
				postfix += ' ';
				operatorStack.pop();
			}
			operatorStack.pop();
		}
		else if(item == '+' || item == '-')
		{
			postfix += ' ';
			while(!operatorStack.isEmpty() && operatorStack.peek() != '(')
			{
				postfix += operatorStack.peek();
				postfix += ' ';
				operatorStack.pop();
			}
			operatorStack.push(item); 
		}
		else if(item == '*' || item == '/' || item == '%')
		{
			postfix += ' ';
			while(!operatorStack.isEmpty() && operatorStack.peek() != '(' && (operatorStack.peek() == '*' || operatorStack.peek() == '/' || operatorStack.peek() == '%'))
			{
				postfix += operatorStack.peek();
				postfix += ' ';
				operatorStack.pop();
			}
			operatorStack.push(item);
		}
		else
		{
			postfix += item;
		}
	}
	while(!operatorStack.isEmpty())
	{
		postfix += ' ';
		postfix += operatorStack.peek();
		operatorStack.pop();
	}
	assert(postfix.find("(") == string::npos);
	Stack<int> operandStack;
	string unit;
	int spaceIndex;
	while(postfix != " " && postfix.length() != 0)
	{
		if(postfix.length() == 1)
		{
			unit = postfix;
			postfix = " ";
		}
		else
		{
			spaceIndex = postfix.find(" ");
			unit = postfix.substr(0,spaceIndex);
			postfix.erase(0,spaceIndex + 1);
			if(unit.length() == 0)
				continue;
		}
		if(unit == "+")
		{
			int operand2 = operandStack.peek();
			operandStack.pop();
			int operand1 = operandStack.peek();
			operandStack.pop();
			int result = operand1 + operand2;
			operandStack.push(result);
		}
		else if(unit == "-")
		{
			int operand2 = operandStack.peek();
			operandStack.pop();
			int operand1 = operandStack.peek();
			operandStack.pop();
			int result = operand1 - operand2;
			operandStack.push(result);
		}
		else if(unit == "*")
		{
			int operand2 = operandStack.peek();
			operandStack.pop();
			int operand1 = operandStack.peek();
			operandStack.pop();
			int result = operand1 * operand2;
			operandStack.push(result);
		}
		else if(unit == "/")
		{
			int operand2 = operandStack.peek();
			operandStack.pop();
			int operand1 = operandStack.peek();
			operandStack.pop();
			int result;
			assert(operand2 != 0);
			result = operand1 / operand2;
			operandStack.push(result);
		}
		else if(unit == "%")
		{
			int operand2 = operandStack.peek();
			operandStack.pop();
			int operand1 = operandStack.peek();
			operandStack.pop();
			int result = operand1 % operand2;
			operandStack.push(result);
		}
		else
		{
			int result = atoi(unit.c_str());
			operandStack.push(result);
		}
	}
	cout << operandStack.peek();
	return 0;
}

